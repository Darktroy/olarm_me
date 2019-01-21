<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cards_holder extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cards_holders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'card_holder_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'user_id',
                  'name'
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
     * Get the cardHolder for this model.
     */
    public function cardHolder()
    {
        return $this->belongsTo('App\Models\CardHolder','card_holder_id');
    }

    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    private function getStaticCardHolder($typeId){
        $data = array();
        if($typeId == 3 ){
            $data = self::whereIn('name',array('cardpool','colleagues','pending','default'))->select('card_holder_id','name','canDelete')->get()->toArray();
        } else {
            $data = self::whereIn('name',array('pending','default'))->select('card_holder_id','name','canDelete')->get()->toArray();
        }
        return $data;
    }

    public function getUserCardHolders($userId,$typeId) {
        $privateData = $this->getStaticCardHolder($typeId);
        $userCardHolders = self::where('user_id',$userId)->select('card_holder_id','name','canDelete')->get()->toArray();
        $data = array_merge($privateData,$userCardHolders);
        return $data;
    }
}
