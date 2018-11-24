<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Interest;
use Illuminate\Http\Request;
use App\Models\card_to_interests;
use App\Models\interestes;
use App\Http\Controllers\Controller;
use App\Models\profile;
use App\Models\TemplateLayout;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use Validator;
use Exception;

class CardToInterestsController extends Controller
{

    /**
     * Display a listing of the card to interests.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $cardToInterestsObjects = card_to_interests::with('cardtointerest','interest','user')->paginate(25);

        return view('card_to_interests.index', compact('cardToInterestsObjects'));
    }

    /**
     * Show the form for creating a new card to interests.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $cardToInterests = CardToInterest::pluck('id','card_to_interest_id')->all();
$interests = Interest::pluck('id','id')->all();
$users = User::pluck('id','id')->all();
        
        return view('card_to_interests.create', compact('cardToInterests','interests','users'));
    }

    /**
     * Store a new card to interests in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $user = Auth::user();
         try {
                DB::beginTransaction();
                $data = $this->getData($request);
                if ($data->fails()) { 
                  return response()->json([
                  'status' => 'error','error'=>$data->errors(),'status-code'=>401,'code'=>100],200);
                }
                $createdint = [];
                $data = $request->all();
                foreach ($data['interests'] as $key => $value) {
                    if($value['private']==0){
                        $test_ifa_exist = interestes::where('interest_id',$value['interest_id'])->get();
                        if(count($test_ifa_exist)==0){
                            throw new Exception('Sorry interest not exist');
                        }
                        $temp = [];
                        $temp['user_id'] = $user->id;
                        $temp['card_id'] = $data['card_id'];
                        $temp['interest_id'] = $value['interest_id'];
                        $temp['name'] = $test_ifa_exist[0]['name'];
                        $temp['private'] = 0;
                        $createdint[] = card_to_interests::updateOrCreate($temp);
                    }else{
                        // especially for this user and not listed in my interests list
                        $temp = [];
                        $temp['user_id'] = $user->id;
                        $temp['interest_id'] = 0;
                        $temp['card_id'] = $data['card_id'];
                        $temp['name'] = $value['name'];
                        $temp['private'] = 1;
                        $createdint[] = card_to_interests::Create($temp);
                    }//else if($value['private']==0)
                }

            DB::commit();
                return response()->json([
                    'data' =>  $createdint,
                    'status' => 'success','status-code'=>200,'code'=>200
                ],200);

        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),
                        'errorData' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile()
                      ,'status-code'=>403,'code'=>100
                    ],200);
        }
    }

    /**
     * Display the specified card to interests.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $cardToInterests = card_to_interests::with('cardtointerest','interest','user')->findOrFail($id);

        return view('card_to_interests.show', compact('cardToInterests'));
    }

    /**
     * Show the form for editing the specified card to interests.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $cardToInterests = card_to_interests::findOrFail($id);
        $cardToInterests = CardToInterest::pluck('id','card_to_interest_id')->all();
$interests = Interest::pluck('id','id')->all();
$users = User::pluck('id','id')->all();

        return view('card_to_interests.edit', compact('cardToInterests','cardToInterests','interests','users'));
    }

    /**
     * Update the specified card to interests in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $cardToInterests = card_to_interests::findOrFail($id);
            $cardToInterests->update($data);

            return redirect()->route('card_to_interests.card_to_interests.index')
                             ->with('success_message', 'Card To Interests was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified card to interests from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $cardToInterests = card_to_interests::findOrFail($id);
            $cardToInterests->delete();

            return redirect()->route('card_to_interests.card_to_interests.index')
                             ->with('success_message', 'Card To Interests was successfully deleted!');

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
            'card_id' => 'integer|min:1|exists:cards,card_id',
     
        ];
        $messages =[
            'picture.required' => 'Please Enter valid picture',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }

}
