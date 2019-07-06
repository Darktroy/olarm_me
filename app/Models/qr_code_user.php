<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class qr_code_user extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'qr_code_users';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'qr_code_user_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'card_id',
        'code',
        'begain_at',
        'ended_at',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'begain_at',
        'ended_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the qrCodeUser for this model.
     */
    public function qrCodeUser()
    {
        return $this->belongsTo('App\Models\QrCodeUser', 'qr_code_user_id');
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

    /**
     * Set the begain_at.
     *
     * @param string $value
     */
    public function setBegainAtAttribute($value)
    {
        $this->attributes['begain_at'] = !empty($value) ? date($this->getDateFormat(), strtotime($value)) : null;
    }

    /**
     * Set the ended_at.
     *
     * @param string $value
     */
    public function setEndedAtAttribute($value)
    {
        $this->attributes['ended_at'] = !empty($value) ? date($this->getDateFormat(), strtotime($value)) : null;
    }

    /**
     * Get ended_at in array format.
     *
     * @param string $value
     *
     * @return array
     */
    public function getEndedAtAttribute($value)
    {
        return date('j/n/Y g:i A', strtotime($value));
    }

    public function geberateQR($request, $user)
    {
        $st1 = str_replace(':', '', now());
        $st2 = str_replace('-', '', $st1);
        $st3 = str_replace(' ', '', $st2);
        $card = cards::where('user_id', $user->id)->where('personal', 1)->first();
        if (count($card) > 0) {
            $code = md5($st3) . md5($card->card_id) . md5($user->id);
            $data = self::create(array(
                'user_id' => $user->id, 'card_id' => $card->card_id,
                'code' => $code,
            ));

            return $code;
        } else {
            $code = md5($st3) . md5($user->id) . 'qrNotSet';
            $data = self::create(array(
                ' user_id ' => $user->id, ' card_id ' => $card->card_id,
                ' code ' => $code,
            ));

            return $code;
        }
    }

    protected function getData(Request $request)
    {
        $rules = [
            ' user_id ' => ' nullable ',
            ' card_id ' => ' nullable ',
            ' code ' => ' nullable ',
            // ' begain_at ' => ' date_format: j / n / Y g :i   A|nullab le',
            //  'ended_ at' =>  'date_forma t : j / n/Y  g : i A|nullable',
        ];

        $data = $request->validate($rules);

        return $data;
    }
}
