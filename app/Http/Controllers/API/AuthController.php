<?php
    namespace App\Http\Controllers\API;
    
    use Illuminate\Http\Request; 
    use App\Http\Controllers\Controller; 
    use Illuminate\Support\Facades\Auth; 
    use App\User; 
    use Validator;
use Illuminate\Validation\Rule;
    use Illuminate\Support\Facades\DB;
    use Exception;
    use App\Models\resetsteps;
    
    class AuthController extends Controller 
    {
      /** 
       * Login API 
       * 
       * @return \Illuminate\Http\Response 
       */ 
      public function login(Request $request){ 
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
          $user = Auth::user(); 
          $success['token'] =  $user->createToken('LaraPassport')->accessToken; 
          $success['UserDetails'] =  $user; 
          return response()->json([
            'status' => 'success',
            'data' => $success,
            'status' => 'success','status-code'=>200, 'code'=>200
          ],200); 
        } else { 
          return response()->json([
            'status' => 'error',
            'data' => 'Unauthorized Access','status-code'=>403, 'code'=>100
          ],200); 
        } 
      }
        
      public function loginMobile(Request $request){ 
        if(Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])){ 
          $user = Auth::user(); 
          $success['token'] =  $user->createToken('LaraPassport')->accessToken; 
          $success['UserDetails'] =  $user; 
          return response()->json([
            'status' => 'success',
            'data' => $success,
            'status' => 'success','status-code'=>200, 'code'=>200
          ],200); 
        } else { 
          return response()->json([
            'status' => 'error',
            'data' => 'Unauthorized Access','status-code'=>403, 'code'=>100
          ],200); 
        } 
      }
      
      /** 
       * Register API 
       * 
       * @return \Illuminate\Http\Response 
       */ 
      public function register(Request $request) 
      { 
          try {
//              \Illuminate\Support\Facades\DB::
            DB::beginTransaction();

                    $string = md5( microtime() );
                    $no = random_int(2, strlen($string));
                    $code = substr($string,(strlen($string)/$no),4);

                    $validator = Validator::make($request->all(), [ 
                      'first_name' => 'required', 
                      'last_name' => 'required', 
                      'email' => 'required|email|unique:users,email', 
                      'password' => 'required', 
                      'c_password' => 'required|same:password', 
                      'lang' => 'required|string|min:2|max:2', 
                      'accept_terms' => 'required|int|size:1', 
                    ]);
                    if ($validator->fails()) { 
                      return response()->json(['data'=>$validator->errors(),'status'=>'erroe','status-code'=>'403','code'=>100],200);
                    }
                    $postArray = $request->all(); 
                    $postArray['name'] = $postArray['first_name'];
                    $postArray['first_name'] = $postArray['first_name'];
                    $postArray['last_name'] = $postArray['last_name'];
                    $postArray['password'] = bcrypt($postArray['password']); 
                    $user = User::create($postArray); 
                    $success['token'] =  $user->createToken('LaraPassport')->accessToken; 
                    $success['name'] =  $user->name;
                    $success['UserDetails'] =  $user;
                    $ActivationProcess_obj = new \App\Http\Controllers\ActivationProcessesController();
                    $ActivationProcess_obj->activationCode($user->id);
            //        dd($user->id);
            //        $code = \App\Models\ActivationProcess::create();
                    DB::commit();
                    return response()->json([
                        'status' => 'success',
                        'data' => $success,'status-code'=>200,'code'=>200
                    ],200);
          } catch (Exception $ex) {
              DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $ex->getMessage(),'status-code'=>403 ,'code'=>100
                    ],200);
          }  
         
      }
      
      public function newPassReset(Request $request) 
      { 
          try {
//              \Illuminate\Support\Facades\DB::
            $postArray = $request->all(); 
            DB::beginTransaction();
            $validator = Validator::make($request->all(), [
            'temp_pass' => [                                                                  
                'required',                                                            
                    Rule::exists('resetsteps', 'temp_pass')->where(function ($query) use ($postArray) 
                        { 
                            $query->where('temp_pass', $postArray['temp_pass']);
                        })
                        ],
                      'password' => 'required', 
                      'c_password' => 'required|same:password', 
                      
                    ]);
                    if ($validator->fails()) { 
                      return response()->json(['data'=>$validator->errors(),'status'=>'erroe','status-code'=>'403','code'=>100],200);
                    }
                    $data = resetsteps::where('temp_pass',$postArray['temp_pass'])->select('email')->first();
                    
                    $postArray_password['password'] = bcrypt($postArray['password']); 
                    
                    $user = User::where('email',$data['email'])->update($postArray_password); 
                    $user = User::where('email',$data['email'])->first(); 
                    $success['token'] =  $user->createToken('LaraPassport')->accessToken; 
                    $success['name'] =  $user->name;
                    $success['UserDetails'] =  $user;
                    $ActivationProcess_obj = new \App\Http\Controllers\ActivationProcessesController();
                    $ActivationProcess_obj->activationCode($user->id);
                    $data->delete();
            //        dd($user->id);
            //        $code = \App\Models\ActivationProcess::create();
                    DB::commit();
                    return response()->json([
                        'status' => 'success',
                        'data' => $success,'status-code'=>200,'code'=>200
                    ],200);
          } catch (Exception $ex) {
              DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $ex->getMessage(),'status-code'=>403 ,'code'=>100
                    ],200);
          }  
         
      }
      
      /** 
       * details api 
       * 
       * @return \Illuminate\Http\Response 
       */ 
      public function getDetails() 
      { 
        $user = Auth::user(); 
        return response()->json(['success' => $user]); 
      } 
    }