<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cards extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cards';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'card_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                    'user_id','last_name','first_name',
                    'create_by',
                    'privacy',
                    'company_name',
                    'position',
                    'cell_phone_number',
                    'landline',
                    'fax','website_url','about_me',
                    'template_layout_id',
                    'picture',
                    'personal','card_holder_id',
                    'logo','alias','facebook_url',
                    'twitter_url','instagram_url','youtube_url'
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
