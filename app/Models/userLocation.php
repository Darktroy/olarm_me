<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Exception;

class userLocation extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_locations';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'userLocation_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'card_id', 'user_id',
        'lat',
        'long',
        'country',
        'state',
        'city',
        'formatted_address'
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
    protected $casts = [
        'userLocation_id' => 'int'
    ];

    public function cards()
    {
        return $this->belongsTo('App\Models\cards', 'card_id');
    }

    protected function getData(Request $request)
    {
        $rules = [
            'lat' => 'required|string|min:1',
            'long' => 'required|string|min:1'
        ];

        $data = $request->validate($rules);


        return $data;
    }
    public function setLocation(Request $request, $user_id)
    {
        $data = $this->getData($request);
        $lat = $request->lat;
        $lng = $request->long;
        $url = str_replace(" ", "%20", "https://maps.google.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=false&key=AIzaSyCOyVPUatwyudwfRUNMZyvSuJirXSGYvBI");

        // $data = file_get_contents("https://maps.google.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=false&key=AIzaSyCOyVPUatwyudwfRUNMZyvSuJirXSGYvBI");
        $data = file_get_contents($url);
        $data = json_decode($data);
        $add_array  = $data->results;
        $add_array = $add_array[0];
        //            personal -> 1
        $thecard = cards::where('user_id', $user_id)->where('personal', 1)->first();
        if ($thecard == NULL) {
            throw new Exception('No card found for this nuser');
        }
        $userLocation = userLocation::updateOrCreate(
            array('user_id' => $user_id),
            array(
                'user_id' => $user_id, 'card_id' => $thecard->card_id, 'lat' => $lat, 'long' => $lng,
                'formatted_address' => $add_array->formatted_address
            )
        );
        return $userLocation;
    }

    public function getCardsNearBy($formatted_address)
    {
        $dataRow = self::with('cards')->where('formatted_address', $formatted_address)->get();
        $data = array();
        foreach ($dataRow as $key => $value) {
            // dd($value['cards']);
            // dd($value->cards);
            $data[] = $value['cards'];
        }
        return $data;
    }
}
