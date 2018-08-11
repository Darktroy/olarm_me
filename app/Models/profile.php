<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'profile_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                'user_id',
                'picture',
                'gender',
                'country',
                'city',
                'district',
                'field',
                'industry',
                'specialty',
                'privacy',
                'template_layout_id',
                'logo',
                'about',
                'alias',
                'facebook_url',
                'twitter_url',
                'instagram_url',
                'youtube_url',
                'personal'
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
     * Get the templateLayout for this model.
     */
    public function templateLayout()
    {
        return $this->belongsTo('App\Models\TemplateLayout','template_layout_id');
    }



}
