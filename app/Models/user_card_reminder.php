<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class user_card_reminder extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_card_reminders';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'user_card_reminder_id',
                  'user_id',
                  'card_id',
                  'date',
                  'time',
                  'reminder',
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
     * Get the userCardReminder for this model.
     */
    public function userCardReminder()
    {
        return $this->belongsTo('App\Models\UserCardReminder', 'user_card_reminder_id');
    }

    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Get the card for this model.
     */
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }

    public function storeUCR(Request $request, $user)
    {
        $data = $this->getData($request);
        $data = $request->all();
        $data = self::create($data);

        return $data;
    }

    protected function getData(Request $request)
    {
        $rules = [
            'card_id' => 'nullable',
            'date' => 'required|date_format:"d-m-Y"',
            'time' => 'required|date_format:"h:i"',
            'reminder' => 'required|string|min:1',
        ];
        $data = $request->validate($rules);
        // dd($data);
    }
}
