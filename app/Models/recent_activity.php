<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recent_activity extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recent_activities';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'recent_activity_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'user_id',
                  'action_by_user_id',
                  'description',
                  'profile_image_url'
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
        return $this->belongsTo('App\User','user_id');
    }

    /**
     * Get the actionByUser for this model.
     */
    public function actionByUser()
    {
        return $this->belongsTo('App\ActionByUser','action_by_user_id');
    }



}
