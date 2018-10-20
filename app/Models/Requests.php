<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
    use Validator;
use Exception;

class Requests extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'requests';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'request_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'from_id',
                  'to_id'
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
     * Get the to for this model.
     */
    



    public static function addRequest($user_id, Request $request ) {
        
    
        $rules = [
            'to_id' => 'required|int|min:1|exists:cards,card_id',
     
        ];
        $messages =[
            'to_id.required' => 'Please Enter valid Card id',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        if ($data->fails()) { 
            $ec = new self();
            $erroraRRAY = $data->errors()->toArray();
            $error_message = $ec->errorHandling($erroraRRAY);
            throw new Exception($error_message);
       }
        $data = $request->all();
        $data['user_id'] = $user_id;
        $requester_card = cards::where('user_id',$user_id)->where('create_by',$user_id)->
                            where('personal',1)->get();
        if(count($requester_card)==0){
            throw new Exception('user has not personal card');
        }
        $to_card = cards::where('card_id',$data['to_id'])->where('personal',1)->get();
        if(count($to_card)==0){
            throw new Exception('Card not verified');
        }
        $to_ret = '';
        if($to_card[0]->privacy == 1){
            user_cards::updateOrCreate(array('user_id'=>$to_card[0]['user_id'],'card_id'=>$requester_card[0]['card_id']),
                    array('user_id'=>$to_card[0]['user_id'],'card_id'=>$requester_card[0]['card_id'],'card_holder_id'=>0));
            
            user_cards::updateOrCreate(array('user_id'=>$requester_card[0]['user_id'],'card_id'=>$to_card[0]['card_id']),
                    array('user_id'=>$requester_card[0]['user_id'],'card_id'=>$to_card[0]['card_id'],'card_holder_id'=>0));
            
            $to_ret ='the card has been added to your default card holder';
            
        } else {
            self::updateOrCreate(array('to_id'=>$to_card[0]['card_id'],'from_id'=>$requester_card[0]['card_id']),
                                 array('to_id'=>$to_card[0]['card_id'],'from_id'=>$requester_card[0]['card_id']));
            $to_ret ='The request has been submit , waiting for approve';
        }
        
        return $to_ret;
    }
    public static function approveRequest($user_id, Request $request ) {
        
    
        $rules = [
            'request_id' => 'required|int|min:1|exists:requests,request_id',
            'from_id' => 'required|int|min:1|exists:cards,card_id',
     
        ];
        $messages =[
            'request_id.required' => 'Please Enter Request id',
            'from_id.required' => 'Please Enter valid Card id',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        if ($data->fails()) { 
            $ec = new self();
            $erroraRRAY = $data->errors()->toArray();
            $error_message = $ec->errorHandling($erroraRRAY);
            throw new Exception($error_message);
       }
        $data = $request->all();
        $data['user_id'] = $user_id;
        $approver_card_data = cards::where('user_id',$user_id)->where('create_by',$user_id)->
                            where('personal',1)->get();
        if(count($approver_card_data)==0){
            throw new Exception('user has not personal card');
        }
        $requster_card = cards::where('card_id',$data['from_id'])->where('personal',1)->get();
        if(count($requster_card)==0){
            throw new Exception('Card not verified');
        }
        user_cards::create(array('user_id'=>$user_id,'card_id'=>$requster_card[0]['card_id'],'card_holder_id'=>0));
            user_cards::create(array('user_id'=>$requster_card[0]['user_id'],'card_id'=>$approver_card_data[0]['card_id'],'card_holder_id'=>0));
            self::where('request_id',$data['request_id'])->where('from_id',$data['from_id'])->delete();
            return 'the card has been added to your default card holder';
    }
    
    //removeRequest
    public static function removeRequest($user_id, Request $request ) {
        
    
        $rules = [
            'request_id' => 'required|int|min:1|exists:requests,request_id',
            'from_id' => 'required|int|min:1|exists:cards,card_id',
     
        ];
        $messages =[
            'request_id.required' => 'Please Enter Request id',
            'from_id.required' => 'Please Enter valid Card id',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        if ($data->fails()) { 
            $ec = new self();
            $erroraRRAY = $data->errors()->toArray();
            $error_message = $ec->errorHandling($erroraRRAY);
            throw new Exception($error_message);
       }
        $data = $request->all();
        $data['user_id'] = $user_id;
        self::where('request_id',$data['request_id'])->where('from_id',$data['from_id'])->delete();
            return 'the request has been revoke';
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
    
    public function card_to()
    {
        return $this->belongsTo('App\Models\cards','to_id','card_id');
    }
    
    public function card_from()
    {
        return $this->belongsTo('App\Models\cards','from_id','card_id');
    }
}
