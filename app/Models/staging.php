<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class staging extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stagings';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'staging_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'user_id',
                  'registration',
                  'active_account',
                  'creation_own_profile',
                  'creation_own_card'
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



}
