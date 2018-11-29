<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Validation\Rule;
use Exception;
use \App\helperVars;

class messag_record extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messag_records';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'messag_record_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'email',
                  'title_of_message',
                  'message',
                  'user_id'
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
    
    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }


    public function snedContactUsMessage( $userId,$request) {
        $validationResuklt = self::validDataOfInsertion($request);
        if ($validationResuklt->fails()) { 
            $errorMessage = helperVars::errorHandling($validationResuklt->errors()->toArray());
            throw new Exception($errorMessage);
        }
        $data = $request->all();
        $dataReturned = self::create(array("email"=>$data["email"],"title_of_message"=>$data["title_of_message"],
            "message"=>$data["message"],"user_id"=>$userId));
        return $dataReturned;
    }

    protected static function validDataOfInsertion($request) {
        $data = $request->all();
            $rules = [
            'email' => 'required|email|exists:departments,email',
            'title_of_message' => 'string|nullable',
            'message' => 'required|string|min:1',
        ];
        
        $messages =[ 'email.exists' =>' email not exist',
            'message.required' => 'Please Enter proper message '];
        $validationResuklt = Validator::make($request->all(), $rules, $messages);
        return $validationResuklt;
    }
}

/*protected function validDataOfInsertion($request) {
        $data = $request->all();
            $rules = [
                    'email' => [                                                                  
                            'required','exists:departments,email',                                                     
                            Rule::exists('system_users', 'system_id')                     
                            ->where(function ($query) use ($data) {                      
                                $query->where('system_id', $data['system_id'])->where('type',1)
                                        ->where('user_id', $data['owner_user_id']);                  
                            })                                                             
                        ],
                    'user_id' => [                                                                  
                            'required',                                                     
                            Rule::exists('system_users', 'user_id')                     
                            ->where(function ($query) use ($data) {                      
                                $query->where('system_id', $data['system_id'])->whereIn('type',array(0, 2))
                                        ->where('user_id', $data['user_id']);                  
                            })                                                             
                        ],
     
        ];
        
        $messages =[ 'system_id.exists' =>' system not exist or you donot have permission as Owner','admin.required' => 'Please Enter proper permission '];
        $validationResuklt = Validator::make($request->all(), $rules, $messages);
        if ($validationResuklt->fails()) { 
              return response()->json(['status' => 'error','error'=>$validationResuklt->errors(),'status-code'=>401],200);
        }
    }*/