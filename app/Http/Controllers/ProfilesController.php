<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\profile;
use App\Models\cards;
use App\Models\staging;
use Illuminate\Http\Request;
use App\Models\TemplateLayout;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\helperVars;
    use Validator;
use Exception;

class ProfilesController extends Controller
{

    /**
     * Display a listing of the profiles.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $profiles = profile::with('user','templatelayout')->paginate(25);

        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new profile.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();
$templateLayouts = TemplateLayout::pluck('id','id')->all();
        
        return view('profiles.create', compact('users','templateLayouts'));
    }

    /**
     * Store a new profile in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
//        dd(url(helperVars::$picPath));
            $user = Auth::user();
        try {
            DB::beginTransaction();
            $data = $this->getData($request);
            if ($data->fails()) { 
              return response()->json([
              'status' => 'error','error'=>$data->errors(),'status-code'=>401,'code'=>100],200);
            }
            $isProfileExist = profile::where('user_id',$user->id)->get();
            if(count($isProfileExist)>0){
                return response()->json([
                    'status' => 'error','error-data'=>'profile of this user already exist',
                    'status-code'=>401],200);
                }
            $data = $request->all();
            $imageName='';
            
            if ($request->hasFile('picture') && is_file($data['picture'])){ 
                $file = $request->file('picture');
                $ext = strtolower($file->getClientOriginalExtension());
                    $imageName = 'profile_pic_'. md5($user->id).'.'.$ext;
                    $data['picture']->move(public_path('/card_image'), $imageName);
//                $data['picture'] =helperVars::$picPath.$imageName;
                $imageName = '/card_image/'.$imageName;
                $data['picture'] =url($imageName);
            } 
            /*
            if ($request->hasFile('logo') && is_file($data['logo'])){ 
                $file = $request->file('logo');
                $ext = strtolower($file->getClientOriginalExtension());
                    $imageName = 'logo_'. md5($user->id).'.'.$ext;
                    $data['logo']->move(public_path('/logo_image'), $imageName);
//                $data['logo'] =helperVars::$logoPath.$imageName;
                $imageName = '/logo_image/'.$imageName;
                $data['logo'] =url($imageName);
            } 
            */
            $data['user_id'] = $user->id;
            //,'last_name','first_name',
            $data['last_name'] = $user->last_name;
            $data['first_name'] = $user->first_name;
//            $data['personal'] = 1; //0 for not person
            $profilerow = profile::create($data);
            $profile = profile::where('profile_id',$profilerow->profile_id)->first();
            staging::updateOrCreate(array('user_id' => $user->id), array('creation_own_profile' => 1));
//            dd($profile);
            DB::commit();
                    return response()->json([
                        'data' =>  $profilerow,
                        'message' =>  'your account is Activated',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'status-code'=>403, 'code'=>100
                    ],200);
        }
    }
     
    
    public function updateMyProfile(Request $request)
    {
//        dd(url(helperVars::$picPath));
            $user = Auth::user();
            $userId = $user->id;
            $st1 = str_replace(':', '', now());
        $st2 = str_replace('-', '', $st1);
        $st3 = str_replace(' ', '', $st2);
        try {
            DB::beginTransaction();
            $data = $this->getData($request);
            if ($data->fails()) { 
              return response()->json([
              'status' => 'error','error'=>$data->errors(),'status-code'=>401,'code'=>100],200);
            }
            $isProfileExist = profile::where('user_id',$user->id)->get();
            if(count($isProfileExist)==0){
                return response()->json([
                    'status' => 'error','error'=>'profile of this user not exist',
                    'status-code'=>401,'code'=>100],200);
                }
            $data = $request->all();
            $imageName='';
            
            if ($request->hasFile('picture') && is_file($data['picture'])){ 
                $file = $request->file('picture');
                $ext = strtolower($file->getClientOriginalExtension());
                    $imageName = 'profile_pic_'.md5($st3).md5($user->id).'.'.$ext;
                    $data['picture']->move(public_path('/card_image'), $imageName);
//                $data['picture'] =helperVars::$picPath.$imageName;
                $imageName = '/card_image/'.$imageName;
                $data['picture'] =url($imageName);
                cards::where('user_id',$userId)
                        ->update(['picture' => $data['picture'],'last_name'=>$data['last_name'],
                            'first_name'=>$data['first_name']]);
                User::where('id',$userId)->update(['last_name'=>$data['last_name'],
                            'first_name'=>$data['first_name']]);
            }else{
                cards::where('user_id',$userId)
                        ->update(['last_name'=>$data['last_name'],
                            'first_name'=>$data['first_name']]);
                User::where('id',$userId)->update(['last_name'=>$data['last_name'],
                            'first_name'=>$data['first_name']]);
            } 
            #cARD IMAGE MUST BE UPDATED TOO 
            #user first name and last name must be updated too
//            $data['personal'] = 1; //0 for not person
            $profile = profile::where('user_id',$userId)->update($data);
            $profile = profile::where('user_id',$userId)->get();
//            dd($profile);
            DB::commit();
                    return response()->json([
                        'data' =>  $profile[0],
                        'message' =>  'your Profile Updated',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'status-code'=>403, 'code'=>100
                    ],200);
        }
    }
     
    public function showProfile(Request $request)
    {
            $user = Auth::user();
        try {
            $profilerow = profile::where('user_id',$user->id)->get();
            if(count($profilerow)==0){
                return response()->json([
                    'data' =>  Null,
                    'message' =>  'No profile related to this user',
                    'status' => 'success','status-code'=>200, 'code'=>200
                ],200);
                }
                   return response()->json([
                        'data' =>  $profilerow[0],
                        'message' =>  'your Profile is Here',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
        } catch (Exception $exception) {
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'status-code'=>403 , 'code'=>100
                    ],200);
        }
    }

//    showIndustriesList
    public function showIndustriesList(Request $request)
    {
            $user = Auth::user();
        try {
            $industriesListRow = profile::select('industry')->distinct()->get()->toArray();
            $data = [];
            if(count($industriesListRow) > 0){
                foreach ($industriesListRow as $key => $value) {
                    $data[] = $value['industry'];
                }
            }
                   return response()->json([
                        'data' =>  $data,
                        'message' =>  'From Iessa with Love',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
        } catch (Exception $exception) {
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'status-code'=>403 , 'code'=>100
                    ],200);
        }
    }
    
//    getIFieldsList
    
    public function getIFieldsList(Request $request)
    {
        $user = Auth::user();
     
        $rules = [ 'industry' => 'required|string|min:1|exists:profiles,industry', ];
        $messages =[ 'industry.required' => 'Please Enter valid industry or existance ', ];
        $data = Validator::make($request->all(), $rules, $messages);
        if ($data->fails()) { return response()->json(['status' => 'error','error'=>$data->errors(),'status-code'=>401,'code'=>100],200);}
        
        try {
            $data = $request->all();
            $specialtyListRow = profile::select('field')->where('industry',$data['industry'])->distinct()->get()->toArray();
            $data = [];
            if(count($specialtyListRow) > 0){
                foreach ($specialtyListRow as $key => $value) {
                    $data[] = $value['field'];
                }
            }
                   return response()->json([
                        'data' =>  $data,
                        'message' =>  'From Iessa with Love',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
        } catch (Exception $exception) {
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'status-code'=>403 , 'code'=>100
                    ],200);
    }
    
        }
// getISpeciatiesList
    
    public function getISpeciatiesList(Request $request)
    {
        $user = Auth::user();
     
        $rules = [ 'field' => 'required|string|min:1|exists:profiles,field', ];
        $messages =[ 'field.required' => 'Please Enter valid field or existance ', ];
        $data = Validator::make($request->all(), $rules, $messages);
        if ($data->fails()) { 
            return response()->json(['status' => 'error','error'=>$data->errors(),
                'status-code'=>401,'code'=>100],200);
            
        }
        
        try {
            $data = $request->all();
            $specialtyListRow = profile::select('specialty')->where('field',$data['field'])->distinct()->get()->toArray();
            $data = [];
            if(count($specialtyListRow) > 0){
                foreach ($specialtyListRow as $key => $value) {
                    $data[] = $value['specialty'];
                }
            }
                   return response()->json([
                        'data' =>  $data,
                        'message' =>  'From Iessa with Love',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
        } catch (Exception $exception) {
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'status-code'=>403 , 'code'=>100
                    ],200);
        }
    }
    /**
     * Display the specified profile.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $profile = profile::with('user','templatelayout')->findOrFail($id);

        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified profile.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $profile = profile::findOrFail($id);
        $users = User::pluck('id','id')->all();
$templateLayouts = TemplateLayout::pluck('id','id')->all();

        return view('profiles.edit', compact('profile','users','templateLayouts'));
    }

    /**
     * Update the specified profile in the storage.
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
            
            $profile = profile::findOrFail($id);
            $profile->update($data);

            return redirect()->route('profiles.profile.index')
                             ->with('success_message', 'Profile was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified profile from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $profile = profile::findOrFail($id);
            $profile->delete();

            return redirect()->route('profiles.profile.index')
                             ->with('success_message', 'Profile was successfully deleted!');

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
            'picture' =>'required|string|min:4',
            'gender' => 'required|string|min:4',
            'country' => 'required|string|min:2',
            'city' => 'required|string|min:2',
            'district' => 'required|string|min:2',
            'field' => 'required|string',
            'industry' => 'required|string',
            'specialty' => 'required|string',
//            'privacy' => 'required|integer|min:1',
//            'template_layout_id' => 'required|integer|min:1',
//            'logo' => ['file','required'],
//            'about' => 'string|min:1',
            'facebook_url' => 'string|min:1|nullable',
            'twitter_url' => 'string|min:1|nullable',
            'instagram_url' => 'string|min:1|nullable',
            'youtube_url' => 'string|min:1|nullable',
            'alias' => 'required|string|min:1',
        ];
        
//        $data = $request->validate($rules);
//        if ($request->has('custom_delete_picture')) {
//            $data['picture'] = null;
//        }
//        if ($request->hasFile('picture')) {
//            $data['picture'] = $this->moveFile($request->file('picture'));
//        }
//
//        return $data;
        
        $messages =[
            'picture.required' => 'Please Enter valid picture',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }
  
    /**
     * Moves the attached file to the server.
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return string
     */
    protected function moveFile($file)
    {
        if (!$file->isValid()) {
            return '';
        }
        
        return $file->store(config('codegenerator.files_upload_path'), config('filesystems.default'));
    }
}
