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
                    'fax',
                    'website_url',
                    'about_me',
                    'template_layout_id',
                    'picture',
                    'personal',
                    'card_holder_id',
                    'logo',
                    'alias','email',
                    'facebook_url',
                    'twitter_url',
                    'instagram_url',    
                    'youtube_url'
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
    public function interests()
    {
        return $this->hasMany('App\Models\card_to_interests','card_id');
    }

    public static function searching($term) {
        
        $profiles_rows = profile::where('industry', 'LIKE', '%' . $term . '%')
                ->orWhere('specialty', 'LIKE', '%' . $term . '%')
                ->orWhere('field', 'LIKE', '%' . $term . '%')
                ->orWhere('district', 'LIKE', '%' . $term . '%')
                ->orWhere('country', 'LIKE', '%' . $term . '%')
                ->orWhere('city', 'LIKE', '%' . $term . '%')->select('user_id')->get()->toArray();
        $ids = [];
        foreach ($profiles_rows as $key => $value) {
            $ids[]=$value['user_id'];
        }
        
//        $searchingCARDSresult = self::where('personal', 1)
        $searchingCARDSresult = self::where('first_name', 'LIKE', '%' . $term . '%')
                ->orWhere('last_name', 'LIKE', '%' . $term . '%')
                ->orWhere('alias', 'LIKE', '%' . $term . '%')
                ->orWhere('landline', 'LIKE', '%' . $term . '%')
                ->orWhere('fax', 'LIKE', '%' . $term . '%')
                ->orWhere('cell_phone_number', 'LIKE', '%' . $term . '%')
                ->orWhere('position', 'LIKE', '%' . $term . '%')
                ->orWhere('website_url', 'LIKE', '%' . $term . '%')
                ->orWhere('company_name', 'LIKE', '%' . $term . '%')
//                ->orWhere('`company_name` LIKE %"' . $term . '"% AND `personal` = 1') 
                ->whereRaw('personal', 1)
//                ->orWhereIn('user_id', $ids)
                ->get()->toArray();
        
return $searchingCARDSresult;
    }

    
    
    
}
