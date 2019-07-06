<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Exception;

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
                  'name', 'company_id',
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
    public function theCards()
    {
        return $this->hasMany('App\Models\cards', 'card_holder_id', 'card_holder_id');
    }

    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    private function getStaticCardHolder($typeId)
    {
        $data = array();
        if ($typeId == 3) {
            $data = self::whereIn('name', array('cardpool', 'colleagues', 'pending', 'default'))->select('card_holder_id', 'name', 'canDelete')->get()->toArray();
        } else {
            $data = self::whereIn('name', array('pending', 'default'))->select('card_holder_id', 'name', 'canDelete')->get()->toArray();
        }

        return $data;
    }

    public function getUserCardHolders($userId, $typeId)
    {
        $privateData = $this->getStaticCardHolder($typeId);
        $userCardHolders = self::where('user_id', $userId)->select('card_holder_id', 'name', 'canDelete')->get()->toArray();
        $data = array_merge($privateData, $userCardHolders);

        return $data;
    }

    /*
    public function getCardsOfHolder(Request $request,$userId) {
        $data = $request->all();
        $data['user_id'] = $userId;
        $rules = [
            'card_holder_id' => [
                'required',
                Rule::exists('cards_holders', 'card_holder_id')
                ->where(function ($query) use ($data)
                        { $query->where('card_holder_id', $data['card_holder_id'])
                                ->where('user_id', $data['user_id']);
                        }
                        )],
        ];


        $messages =[
            'card_holder_id.required' => 'Please Enter proper card Holder',
            'card_holder_id.exists' => 'Please Enter proper or owened card Holder',
            ];
        $dataValidation = Validator::make($request->all(), $rules, $messages);
        if ($dataValidation->fails()) {
                 throw new Exception($dataValidation->errors());
        }
        $data = self::where('card_holder_id',$data['card_holder_id'])->with('theCards')->get()->toArray();
        return $data;
    }*/

    public function deleteCardHolder(Request $request, $user)
    {
        $rules = [
            'card_holder_id' => [
                'required',
                Rule::exists('cards_holders', 'card_holder_id')->where(function ($query) use ($request,$user) {
                    $query->where('card_holder_id', $request->card_holder_id)->where('user_id', $user->id);
                }),
            ],
        ];
        $messages = [
            'card_holder_id.required' => 'Please Enter valid name',
        ];
        $data = Validator::make($request->all(), $rules, $messages);

        if ($data->fails()) {
            throw new Exception($data->errors());
        }

        $cardsHolder = cards_holder::where('card_holder_id', $request->card_holder_id)->delete();
        cards::where('card_holder_id', $request->card_holder_id)->update(array('card_holder_id' => 1));
        recent_activity::create(array('user_id' => $user->id, 'action_by_user_id' => $user->id,
                'description' => 'Delete CardHolder', 'profile_image_url' => null, ));
    }

    public function ShowCardHolder(Request $request, $user)
    {
        $rules = [
            'card_holder_id' => [
                'required',
                Rule::exists('cards_holders', 'card_holder_id')->where(function ($query) use ($request,$user) {
                    $query->where('card_holder_id', $request->card_holder_id)->where('user_id', $user->id);
                }),
            ],
        ];
        $messages = [
            'card_holder_id.required' => 'Please Enter valid name',
        ];
        $data = Validator::make($request->all(), $rules, $messages);

        if ($data->fails()) {
            throw new Exception($data->errors());
        }

        $cardsHolder = cards_holder::where('card_holder_id', $request->card_holder_id)->with('theCards')->get();

        return $cardsHolder;
    }

    public function ShowAllCardHolder($user)
    {
        $cardsHolder = cards_holder::where('user_id', $user->id)->with('theCards')->get();

        return $cardsHolder;
    }
}
