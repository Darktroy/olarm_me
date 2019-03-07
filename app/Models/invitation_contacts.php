<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Exception;

class invitation_contacts extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invitation_contacts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'invitation_contacts_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'phonecode',
                  'phone',
                  'invited_user_id',
                  'invitation_code'
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
     * Get the invitedUser for this model.
     */
    public function invitedUser()
    {
        return $this->belongsTo('App\User','invited_user_id');
    }
    
    public function storeInvitation($request,$userId) {
        $data = $request->all();
        $ret = [];
        if(count($data['phoneData'])==0){
            throw new Exception('no data found');
        }
        
        foreach ($data['phoneData'] as $key => $value) {
            
            if(empty($value['phone']) || substr($value['phone'], 0, 1)!='+'){
                throw new Exception('Phone number not set');
            }
            ####################################################################
            ###########                                   ######################
            ########### SMS with deep link goes from here ######################
            ###########                                   ######################
            ####################################################################
            $ret[]=self::create(array('phone'=>$value['phone'],'invited_user_id'=>$userId));
            
        }
        return $ret; 
    }
    protected function validateForInsert(Request $request)
    {
        $data = $request->all();
        $rules = [
            'phone' => 'required|string',
            'phonecode' => 'string|nullable', 
        ];
       

        $messages =[
            'phone.required' => 'Please Enter proper system id'
        ];
        
        $data = Validator::make($request->all(), $rules, $messages);
        
        return $data;
    }
    
    
    protected function errorHandling($theErrorArray) {
        $error_to_return = '';
        foreach ($theErrorArray as $key => $value) {
            foreach ($value as $keyineer => $valueInner) {
                $error_to_return .= $valueInner.' ';
            }
        }
        return $error_to_return;
    }


}
