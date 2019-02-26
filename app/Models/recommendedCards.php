<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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



}
