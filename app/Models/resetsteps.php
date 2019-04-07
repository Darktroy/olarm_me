<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Validation\Rule;
use Exception;

class resetsteps extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'resetsteps';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'resetsteps_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'email',
                  'confirmation_code',
                  'confirmation_link',
                  'temp_pass'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    protected function getData(Request $request)
    {
        $data = $request->all();
        $rules = [ 'email' => 'required|email|exists:users,email'];
        $messages =['email.required' => 'Please Enter proper email',];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }
    
    public function resetByEmail(Request $request) {
        $resetinObject = new self;
        $ret_data = array();
        $data = $resetinObject->getData($request);
        if ($data->fails()) { 
            $erroraRRAY = $data->errors()->toArray();
            $error_message = implode(" ",$erroraRRAY['email']);
            
            throw new Exception($error_message);
        }
        $data = $request->all();
        $confirmation_code = 'androw12345';
        $data = self::updateOrCreate(array('email' => $data['email']),array("email"=>$data['email'],
                                    "confirmation_code"=>$confirmation_code,
                                    "temp_pass"=>'','confirmation_link'=>'')
                );
                return $data;
    }

    public function confirmationprocess(Request $request) {
        $resetinObject = new self;
        $ret_data = array();
        $data = $resetinObject->getDataOfConfirmation($request);
        if ($data->fails()) { 
            $erroraRRAY = $data->errors()->toArray();
            $error_message = implode(" ",$erroraRRAY['confirmation_code']);
            
            throw new Exception($error_message);
        }
        $data = $request->all();
        $temp_pass = $resetinObject->randomString(2221);
        
        $confirmation_link = $resetinObject->randomString(75);
        $temp_pass .= md5($data['email']);
        $temp_pass .= md5(now());
        $data_update= self::where('email', $data['email'])
                ->where('confirmation_code' , $data['confirmation_code'])
                ->update(array( "temp_pass"=>$temp_pass, 'confirmation_link'=>$confirmation_link)
                );
        $data['temp_pass'] =$temp_pass ;
        $data['confirmation_link'] = $confirmation_link;
        return $data;
    }

    
    protected function getDataOfConfirmation(Request $request)
    {
        $data = $request->all();
        $rules = [
            'confirmation_code' => [                                                                  
                'required',                                                            
                Rule::exists('resetsteps', 'confirmation_code')                     
                ->where(function ($query) use ($data) 
                        { $query->where('email', $data['email'])
                                ->where('confirmation_code', $data['confirmation_code']);
                        }
                        )]
        ];
       

        $messages =[
            'confirmation_code.required' => 'Please Enter proper code',
            'confirmation_code.exists' => 'Please Enter proper code and email',
            ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }
    
    private function randomString($length) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

}
