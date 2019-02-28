<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Validation\Rule;
use Exception;

class recommendedCards extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recommended_cards';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'recommendedCards_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'card_id',
                  'recommended_by_user_id',
                  'recommended_for_user_id'
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
     * Get the card for this model.
     */
    public function card()
    {
        return $this->belongsTo('App\Models\Cards','card_id');
    }

    /**
     * Get the recommendedByUser for this model.
     */
    public function recommendedByUser()
    {
        return $this->belongsTo('App\User','recommended_by_user_id');
    }

    /**
     * Get the recommendedForUser for this model.
     */
    public function recommendedForUser()
    {
        return $this->belongsTo('App\User','recommended_for_user_id');
    }

    public function recommendCardtouser(Request $request, $userId) {
        $validator = Validator::make($request->all(), [
                    'card_id' => ['required','int',
                    Rule::exists('user_cards')->where(function ($query) use ($request,$userId) {
                        return $query->where('card_id',$request->card_id)->where('user_id',$userId);
                    })],        
                    'recommend_to_card_id' => ['required','int',
                        Rule::exists('cards')->where(function ($query) {
                        return $query->where('personal',1);
                    })],  
                ]);
        if ($validator->fails()) {
            throw new Exception($validator->errors());
        }
        $recommended_for_user = cards::where('card_id',$request->recommend_to_card_id)->first();
        $data = self::create(array('card_id'=>$request->card_id,
            'recommended_for_user_id'=>$recommended_for_user->user_id,
            'recommended_by_user_id'=>$userId));
        return $data;
        
    }//recommendCardtouser(Request $request, $userId)


}
