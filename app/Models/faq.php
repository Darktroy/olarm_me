<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faqs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'faq_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'faq_id',
                  'question',
                  'answer'
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
     * Get the faq for this model.
     */
    public function faq()
    {
        return $this->belongsTo('App\Models\Faq','faq_id');
    }



}
