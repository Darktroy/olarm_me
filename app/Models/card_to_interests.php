<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class card_to_interests extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'card_to_interests';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'card_to_interest_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'interest_id',
                  'name',
                  'user_id',
                  'private','card_id'
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
     * Get the cardToInterest for this model.
     */
    public function cardToInterest()
    {
        return $this->belongsTo('App\Models\CardToInterest','card_to_interest_id');
    }

    /**
     * Get the interest for this model.
     */
    public function interest()
    {
        return $this->belongsTo('App\Models\Interest','interest_id');
    }

    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function interestsAllToUser($userId) {
        $interestlistRowdata = interestes::select('interest_id','name')->get()->toArray();
        $cardIntersIdsRowdata = card_to_interests::where('user_id',$userId)
                ->select('interest_id')->get()->toArray();
        $cardIntersIds = array(); 
        $interestList = array();
        if(!empty($cardIntersIdsRowdata)){
            foreach ($cardIntersIdsRowdata as $key => $value) {
               $cardIntersIds[] = $value['interest_id'] ;
            }
        } //if(!empty($cardIntersIdsRowdata))
        
        foreach ($interestlistRowdata as $key => $value) {
            if(in_array($value['interest_id'], $cardIntersIds)){
                $interestList[] = array("interest_id"=>$value['interest_id'] ,
                    "name"=>$value['name'] ,"belongToCard"=> 1 );
            } else {
                $interestList[] = array("interest_id"=>$value['interest_id'] ,
                    "name"=>$value['name'] ,"belongToCard"=> 0);
            }
        }
        return $interestList;
    }


}
