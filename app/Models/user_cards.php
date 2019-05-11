<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use Validator;
    use Illuminate\Validation\Rule;

use Exception;

class user_cards extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_cards';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'user_card_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'user_id',
                  'card_holder_id',
                  'card_id'
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

    /**
     * Get the cardHolder for this model.
     */
    public function cardHolder()
    {
        return $this->belongsTo('App\Models\CardHolder','card_holder_id');
    }
    
    public function theCards()
    {
        return $this->hasOne('App\Models\cards','card_id','card_id');
    }
   
    /**
     * Get the card for this model.
     */
    public function card()
    {
        return $this->belongsTo('App\Models\cards','card_id');
    }


    public function moveCardTonewCardHolder(Request $request,$userId)
    {
        $data = $request->all();
        $data['user_id'] = $userId;
        $rules = [
            'card_holder_id' => [                                                                  
                'required',                                                            
                Rule::exists('cards_holders', 'card_holder_id')                     
                ->where(function ($query) use ($data) 
                        { $query->where('card_holder_id', $data['card_holder_id'])
                                ->where('user_id', $data['user_id']);
                        }
                        )],
//                                card_id
            'card_id' => [                                                                  
                'required',                                                            
                Rule::exists('user_cards', 'card_id')                     
                ->where(function ($query) use ($data) 
                        { $query->where('card_id', $data['card_id'])
                                ->where('user_id', $data['user_id']);
                        }
                        )],
        ];
       

        $messages =[
            'card_id.required' => 'Please Enter proper card',
            'card_id.exists' => 'Please Enter proper or owened card',
            'card_holder_id.required' => 'Please Enter proper card Holder',
            'card_holder_id.exists' => 'Please Enter proper or owened card Holder',
            ];
        $dataValidation = Validator::make($request->all(), $rules, $messages);
        if ($dataValidation->fails()) { 
                 throw new Exception($dataValidation->errors());
            }
        $data = self::where('user_id',$userId)->where('card_id',$data['card_id'])
                ->update(array('card_holder_id'=>$data['card_holder_id']));
        return $data;
    }
    
    public function showMyCards($userId) {
        $dataRow = self::where('user_id',$userId)->with('card')->get()->toArray();
        $data =[];
        foreach ($dataRow as $key => $value) {
            $data[] = $value['card'];
        }
        return $data;
    }
    
    public function showUserrttr($userId) {
        $userCardObject = new self();
        $requestData = $userCardObject->getPrivaceOrrequested($userId);
        $transferedata = self::where('transfered',1)->where('user_id',$userId)->with('theCards.theprofile')->get();
        $transfered = FALSE;
        if(count($transferedata)>0){
            $transfered = $this->getDataClearlyfromusercardtable($transferedata);
        }
        $redirectdata = self::where('redirected',1)->where('user_id',$userId)->get();
        $redirected = FALSE;
        if(count($redirectdata)>0){
            $redirected = $this->getDataClearlyfromusercardtable($redirectdata);
        }
        $recommendedData = recommendedCards::with('card','recommendedByUser')
                ->where('recommended_for_user_id',$userId)->get()->toArray();
        $recommended = FALSE;
        if(count($recommendedData)>0){
            foreach ($recommendedData as $key => $value) {
                $recommended[] = array('card_id'=>$value['card']['card_id'],
                    'first_name'=>$value['card']['first_name'],'last_name'=>$value['card']['last_name'],
                    'privacy'=>$value['card']['privacy'],
                    'privacy_meaning'=>'0 for private card need confirmation before adding , 1 for private card public added without confirmation');
            }
        }
        $data =[];
        $data['request'] = $requestData;
         
        $data['transfered'] = $transfered;
        $data['redirected'] = $redirected;
        $data['recommended'] = $recommended;
        return $data;
         
        
    }
    
    public function getDataClearlyfromusercardtable($dataRow){
        $data = []; $temp = [];
        foreach ($dataRow as $key => $value) {
            if (!is_null($value["theCards"]["theprofile"]["picture"])) {
                $temp['card_id'] = $value["theCards"]["card_id"];
                $temp['profile_id'] = $value["theCards"]["theprofile"]["profile_id"];
                $temp['first_name'] = $value["theCards"]["theprofile"]["first_name"];
                $temp['last_name'] = $value["theCards"]["theprofile"]["last_name"];
                $temp['picture'] = $value["theCards"]["theprofile"]["picture"];
                $temp['updated_at'] = $value["updated_at"];
            
                $data[] = $temp;
            }
        }
       return $data;
    }

    public function getPrivaceOrrequested($userId) {
        $isAccountPublic = cards::where('user_id',$userId)
                ->where('create_by',$userId)->select('privacy')->first();
        $data = FALSE;
        if($isAccountPublic['privacy']==0){
            $data = [];
            $dataRow = Requests::where('to_id',$userId)->with('card_from')->get();
            foreach ($dataRow as $key => $value) {
                
                $data[] = $value['card_from'];
            }
        }
        return $data;
        
    }
    
public function getCardsOfHolder(Request $request,$userId) {
        $data = $request->all();
        $data['user_id'] = $userId;
        $rules = [
            'card_holder_id' => [                                                                  
                'required',                                                            
                Rule::exists('cards_holders', 'card_holder_id')                     
                ->where(function ($query) use ($data) 
                        { $query->where('card_holder_id', $data['card_holder_id'])
                                ->where('user_id', $data['user_id']);
                        }
                        )],
        ];
       

        $messages =[
            'card_holder_id.required' => 'Please Enter proper card Holder',
            'card_holder_id.exists' => 'Please Enter proper or owened card Holder',
            ];
        $dataValidation = Validator::make($request->all(), $rules, $messages);
        if ($dataValidation->fails()) { 
                 throw new Exception($dataValidation->errors());
        }
        $dataRow = self::where('card_holder_id',$data['card_holder_id'])->with('theCards')->get()->toArray();
        $data = [];
        foreach ($dataRow as $key => $value) {
            $data[] = $value['the_cards'];
        }
        return $data;
    }
}
