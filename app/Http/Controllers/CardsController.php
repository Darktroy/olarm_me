<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\cards;
use App\Models\profile;
use App\Models\user_cards;
use App\Models\cards_holder;
use App\Models\staging;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\helperVars;
    use Validator;
use Exception;

class CardsController extends Controller
{

    /**
     * Display a listing of the cards.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $cardsObjects = cards::with('user')->paginate(25);

        return view('cards.index', compact('cardsObjects'));
    }

    /**
     * Show the form for creating a new cards.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();
        
        return view('cards.create', compact('users'));
    }

    /**
     * Store a new cards in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $st1 = str_replace(':', '', now());
        $st2 = str_replace('-', '', $st1);
        $st3 = str_replace(' ', '', $st2);
        $user = Auth::user();
        try {
                DB::beginTransaction();
                $data = $this->getData($request);
                if ($data->fails()) { 
                  return response()->json([
                  'status' => 'error','error'=>$data->errors(),'status-code'=>401,'code'=>100],200);
                }
                
                $data = $request->all();
                $data['create_by'] = $user->id;

                if($data['personal']==1){
                    $data['last_name'] = $user->last_name;
                    $data['first_name'] = $user->first_name;
                    $data['user_id'] = $user->id;
                    $profile = profile::where('user_id',$user->id)->get();
                    if(count($profile)==0){
                        return response()->json(['status' => 'error', 'error'=>'Profile does not exist', 'status-code'=>401],200);
                    }
                    $data['picture'] = $profile[0]['picture'];
                }else{
                    // not personal
                    if(empty($data['last_name'])||empty($data['first_name'])){
                        return response()->json([ 'status' => 'error','error'=>'first or last name not entered','status-code'=>401],200);
                    }
                    $data['user_id'] = Null;
                    if ($request->hasFile('picture') && is_file($data['picture'])){ 
                        $file = $request->file('picture');
                        $ext = strtolower($file->getClientOriginalExtension());
                            $imageName = 'profile_pic_notpersonal_'.md5($st3). md5($user->id).'.'.$ext;
                            $data['picture']->move(public_path('/card_image'), $imageName);
        //                $data['picture'] =helperVars::$picPath.$imageName;
                        $imageName = '/card_image/'.$imageName;
                        $data['picture'] =url($imageName);
                    }else{
                        $data['picture'] =' ';
                    }
                }
                
                if ($request->hasFile('logo') && is_file($data['logo'])){ 
                $file = $request->file('logo');
                $ext = strtolower($file->getClientOriginalExtension());
                    $imageName = 'logo_'.md5($st3). md5($user->id).'.'.$ext;
                    $data['logo']->move(public_path('/logo_image'), $imageName);
//                $data['logo'] =helperVars::$logoPath.$imageName;
                $imageName = '/logo_image/'.$imageName;
                $data['logo'] =url($imageName);
                }else{
                    $data['logo'] =0;
                } 
                
                $createdCard = cards::create($data);
                
                $user_cards = user_cards::create(array('user_id'=>$user->id,
                    'card_holder_id'=>$data['card_holder_id'],'card_id'=>$createdCard->card_id));
                
                staging::updateOrCreate(array('user_id' => $user->id), array('creation_own_card' => 1));
                DB::commit();
                return response()->json([
                    'data' =>  $createdCard,
//                    'message' =>  'your account is Activated',
                    'status' => 'success','status-code'=>200,'code'=>200
                ],200);
        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403,'code'=>100
                    ],200);
        }
    }
    public function showPersonal(Request $request)
    {
        $user = Auth::user();
        try {
                
                $personalCard = cards::where('user_id',$user->id)->with('interests')->get();
                if(count($personalCard)==0){
                    return response()->json(['data' =>  Null,'message' =>  'No Card related to this user','status' => 'success','status-code'=>200],200);
                }
                return response()->json(['data' =>  $personalCard[0],'message' =>  'your account is Activated','status' => 'success','status-code'=>200 ],200);
        } catch (Exception $exception) {
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403,'code'=>100
                    ],200);
        }
    }
    
    /**
     * Display the specified cards.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    //showAll
    
    public function show($id)
    {
        $cards = cards::with('user')->findOrFail($id);

        return view('cards.show', compact('cards'));
    }

    public function showAll() {
        
        $user = Auth::user();
        $from_card_holder = user_cards::where('user_id',$user->id)->select('card_id')->get();
//        $cards = cards::where('create_by',$user->id)->get();
        $cards = cards::whereIn('card_id',$from_card_holder)
                ->with('interests')
                ->get();
                return response()->json([
                    'data' =>  $cards,
                    'status' => 'success','status-code'=>200,
                ],200);
    }
//    searching
    public function searching(Request $request) {
        
        $user = Auth::user();
        $data = $request->all();
        $cards_objet = new cards();
        $cards = $cards_objet->searching($data['terms']);
        return response()->json(['data' =>  $cards,'status' => 'success','status-code'=>200],200);
    }
//    searching
    public function searchingAvanced(Request $request) {
        
        $user = Auth::user();
        $data = $request->all();
        $cards_objet = new cards();
        $cards = $cards_objet->advancedSearching($request);
        return response()->json(['data' =>  $cards,'status' => 'success','status-code'=>200],200);
    }
    /**
     * Show the form for editing the specified cards.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $cards = cards::findOrFail($id);
        $users = User::pluck('id','id')->all();

        return view('cards.edit', compact('cards','users'));
    }

    /**
     * Update the specified cards in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $st1 = str_replace(':', '', now());
        $st2 = str_replace('-', '', $st1);
        $st3 = str_replace(' ', '', $st2);
        try {
            $data = $this->getData($request);
            if ($data->fails()) { 
                  return response()->json([ 'status' => 'error','error'=>$data->errors(),'status-code'=>401,'code'=>100],200);
            }
            $data = $request->all();
            $user = Auth::user();
            $cards = cards::where('create_by',$user->id)
                    ->where('card_id',$id)
                    ->get();
            if(count($cards)==0){
                return response()->json([
                    'message' =>  'No card found',
                    'status' => 'success','status-code'=>404,'code'=>100
                ],200);
            }
            if ($request->hasFile('picture') && is_file($data['picture'])){ 
                $file = $request->file('picture');
                $ext = strtolower($file->getClientOriginalExtension());
                    $imageName = 'profile_pic_notpersonal_'.md5($st3). md5($user->id).'.'.$ext;
                    $data['picture']->move(public_path('/card_image'), $imageName);
//                $data['picture'] =helperVars::$picPath.$imageName;
                $imageName = '/card_image/'.$imageName;
                $data['picture'] =url($imageName);
            }
            if ($request->hasFile('logo') && is_file($data['logo'])){ 
                $file = $request->file('logo');
                $ext = strtolower($file->getClientOriginalExtension());
                    $imageName = 'logo_'.md5($st3). md5($user->id).'.'.$ext;
                    $data['logo']->move(public_path('/logo_image'), $imageName);
//                $data['logo'] =helperVars::$logoPath.$imageName;
                $imageName = '/logo_image/'.$imageName;
                $data['logo'] =url($imageName);
            }
            $cards[0]->update($data);

            return response()->json([
                    'data' =>  $cards[0],
                    'message' =>  'success',
                    'status' => 'success','status-code'=>200,'code'=>200
                ],200);
        } catch (Exception $exception) {
            return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403,'code'=>100
                    ],200);
        }        
    }

    /**
     * Remove the specified cards from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $cards = cards::findOrFail($id);
            $cards->delete();

            return redirect()->route('cards.cards.index')
                             ->with('success_message', 'Cards was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'privacy' => 'required|integer|digits_between:0,1',
            'company_name' => 'required|string|min:1|nullable',
            'position' => 'required|string|min:1|nullable',
            'cell_phone_number' => 'required|string|nullable',
            'landline' => 'required|string|min:1|nullable',
            'fax' => 'required|string|min:1|nullable',
            'website_url' => 'string|min:1|nullable',
            'about_me' => 'string|min:1|nullable',
            'template_layout_id' => 'required|integer|min:1',
            'logo' => ['file','required'],
            'about_me' => 'string|min:1',
//            'alias' => 'required|string|min:1',
            'email' => 'required|string|min:1',
//            'facebook_url' => 'string|min:1|nullable',
//            'twitter_url' => 'string|min:1|nullable',
//            'instagram_url' => 'string|min:1|nullable',
//            'youtube_url' => 'string|min:1|nullable',
            'card_holder_id' => 'string|min:1|exists:cards_holders,card_holder_id',
     
        ];
        $messages =[
            'picture.required' => 'Please Enter valid picture',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }

}
