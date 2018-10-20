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



}
