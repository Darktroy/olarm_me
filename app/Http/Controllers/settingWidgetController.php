<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\profile;
use App\Models\cards;
use Illuminate\Http\Request;
use App\Models\TemplateLayout;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\helperVars;
    use Validator;
use Exception;

class settingWidgetController extends Controller
{
    
    public function store1(Request $request)
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
                    'status' => 'error','error'=>'profile of this user already exist',
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
                    'status' => 'error','error'=>'profile of this user already exist',
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


    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'picture' => ['file','required'],
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
//            'alias' => 'required|string|min:1',
//            'facebook_url' => 'string|min:1|nullable',
//            'twitter_url' => 'string|min:1|nullable',
//            'instagram_url' => 'string|min:1|nullable',
//            'youtube_url' => 'string|min:1|nullable',
     
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
