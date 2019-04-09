<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Exception;

class user_card_note extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_card_notes';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'user_card_note_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'user_id',
                  'card_id',
                  'note',
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
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Get the card for this model.
     */
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }

    protected function getData(Request $request, $user)
    {
        $rules = [
            'card_id' => [
                'required',
                Rule::exists('user_cards', 'card_id')->where(function ($query) use ($request,$user) {
                    $query->where('card_id', $request->card_id)->where('user_id', $user->id);
                }),
            ],
            'note' => 'required|string|min:1',
        ];

        $data = $request->validate($rules);
        if ($data->fails()) {
            throw new Exception($data->errors());
        }
    }

    public function storeNote(Request $request, $user)
    {
        $this->getData($request, $user);
        $user_card_note = user_card_note::create(array('card_id' => $request->card_id,
        'user_id' => $user->id, 'note' => $request->note, ));

        return $user_card_note;
    }
}
