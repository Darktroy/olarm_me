<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emailSignature extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'email_signatures';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'emailSignature_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'emailSignature_id',
                  'user_id',
                  'imageName'
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
