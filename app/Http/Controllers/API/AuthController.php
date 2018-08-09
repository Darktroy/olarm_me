<?php
    namespace App\Http\Controllers\API;
    
    use Illuminate\Http\Request; 
    use App\Http\Controllers\Controller; 
    use Illuminate\Support\Facades\Auth; 
    use App\User; 
    use Validator;
    use Illuminate\Support\Facades\DB;
    use Exception;
    
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
          return response()->json([
            'UserDetails' =>  $user,
            'status' => 'success',
            'data' => $success
          ]); 
        } else { 
          return response()->json([
            'status' => 'error',
            'data' => 'Unauthorized Access'
          ]); 
        } 
      }
        
      public function loginMobile(Request $request){ 
        if(Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])){ 
          $user = Auth::user(); 
          $success['token'] =  $user->createToken('LaraPassport')->accessToken; 
          return response()->json([
            'UserDetails' =>  $user,
            'status' => 'success',
            'data' => $success
          ]); 
        } else { 
          return response()->json([
            'status' => 'error',
            'data' => 'Unauthorized Access'
          ]); 
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
                      return response()->json(['data'=>$validator->errors(),'status'=>'erroe','status-code'=>'400'],200);
                    }
                    $postArray = $request->all(); 
                    $postArray['name'] = $postArray['first_name'];
                    $postArray['password'] = bcrypt($postArray['password']); 
                    $user = User::create($postArray); 
                    $success['token'] =  $user->createToken('LaraPassport')->accessToken; 
                    $success['name'] =  $user->name;
                    $ActivationProcess_obj = new \App\Http\Controllers\ActivationProcessesController();
                    $ActivationProcess_obj->activationCode($user->id);
            //        dd($user->id);
            //        $code = \App\Models\ActivationProcess::create();
                    DB::commit();
                    return response()->json([
                        'UserDetails' =>  $user,
                        'status' => 'success','status-code'=>200,
                        'data' => $success,
                    ],200);
          } catch (Exception $ex) {
              DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $ex->getMessage(),'status-code'=>403
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