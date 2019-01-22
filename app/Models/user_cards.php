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
