<?php

namespace App\Http\Controllers;

use App\Models\resetsteps;
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


class ResetstepsController extends Controller
{

    /**
     * Display a listing of the resetsteps.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $resetstepsObjects = resetsteps::paginate(25);

        return view('resetsteps.index', compact('resetstepsObjects'));
    }

    /**
     * Show the form for creating a new resetsteps.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('resetsteps.create');
    }

    /**
     * Store a new resetsteps in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resetsteps.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $resetsteps = resetsteps::findOrFail($id);

        return view('resetsteps.show', compact('resetsteps'));
    }

    /**
     * Show the form for editing the specified resetsteps.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $resetsteps = resetsteps::findOrFail($id);
        

        return view('resetsteps.edit', compact('resetsteps'));
    }

    /**
     * Update the specified resetsteps in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
            
    }

    /**
     * Remove the specified resetsteps from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
       
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
            'resetsteps_id' => 'required',
            'email' => 'nullable',
            'confirmation_code' => 'string|min:1|nullable',
            'confirmation_link' => 'string|min:1|nullable',
            'temp_pass' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

    
    public function requestByEmail(Request $request)
    {
        try {
            DB::beginTransaction();
            $resetObjectModel = new resetsteps();
            $data = $resetObjectModel->resetByEmail($request);
            
            DB::commit();
            return response()->json(['data' =>  $data,'status' => 'success','status-code'=>200, 'code'=>200,
                'note'=>'this temparory password will be terminate in 12 hour'],200);
        } catch (Exception $exception) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'data' => $exception->getMessage(),'status-code'=>403, 'code'=>100 ],200);
        }
    }
    
    public function confirmBySMS(Request $request)
    {
        try {
            DB::beginTransaction();
            $resetObjectModel = new resetsteps();
            $data = $resetObjectModel->confirmationprocess($request);
            
            DB::commit();
            return response()->json(['data' =>  $data,'status' => 'success','status-code'=>200, 'code'=>200,
                'note'=>'this temparory password will be terminate in 12 hour'],200);
        } catch (Exception $exception) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'data' => $exception->getMessage(),'status-code'=>403, 'code'=>100 ],200);
        }
    }
     
    
    
    
    
    
    
    //**************************************************************************
    //**************************************************************************
    //**************************************************************************
    //**************************************************************************
    //**************************************************************************
    //**************************************************************************
    //**************************************************************************
    
    public function draftFunction(Request $request)
    {
//        dd(url(helperVars::$picPath));
            $user = Auth::user();
        try {
            DB::beginTransaction();
//            $data = $this->getData($request);
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
     
}
