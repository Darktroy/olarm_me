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
//        $lat = $request->lat;
//        $lng = $request->long;
//          30.0790561,31.2489023
//        $sqlQuery = "SELECT * , (3956 * 2 * ASIN(SQRT( POWER(SIN(( 30.0790561 - user_locations.lat) * pi()/180 / 2), 2) +COS( 30.0790561 * pi()/180) * COS(user_locations.lat * pi()/180) * POWER(SIN(( 31.2489023 - user_locations.long) * pi()/180 / 2), 2) ))) as distance from user_locations having distance <= 0.5 order by distance";
        
        $distancve = 0.3;
        $lat = $request->lat ;
        $lon = $request->long;
        $lng = $request->long;
        
        $factor = 6371;//for killometer
        $sqlQuery = "SELECT * , (".$factor." * 2 * ASIN(SQRT( POWER(SIN(( ".$lat." - `user_locations`.`lat`) * pi()/180 / 2), 2) +COS( ".$lat." * pi()/180) * COS(`user_locations`.`lat` * pi()/180) * POWER(SIN(( ".$lon." - `user_locations`.`long`) * pi()/180 / 2), 2) ))) as `distance` from `user_locations` having `distance` <= ".$distancve." ";
        $result = DB::select(DB::raw($sqlQuery));
        $user_ids = array();
        foreach ($result as $key => $value) {
            $user_ids[] = $value->user_id;
        }
        /*
        dd($result);
        $url = str_replace(" ", "%20", "https://maps.google.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=false&key=AIzaSyCOyVPUatwyudwfRUNMZyvSuJirXSGYvBI");
        $data = file_get_contents($url);
        $data = json_decode($data);
        $add_array  = $data->results;
        dd($data);
        $add_array = $add_array[0];*/
        //            personal -> 1
//        dd($user_ids);
//        dd($user_id);88
        $userLocation = userLocation::updateOrCreate(
            array('user_id' => $user_id),
            array(
                'user_id' => $user_id, 'card_id' => $thecard->card_id, 'lat' => $lat, 'long' => $lng,
                'formatted_address' => "Rokybye"
            )
        );
        $thecard = cards::where('user_id', $user_id)->where('personal', 1)->first();
        if ($thecard == NULL) {
            throw new Exception('No card found for this nuser');
        }
        return $user_ids;
    }

    public function getCardsNearBy($formatted_address)
    {
        $dataRow = self::with('cards')->whereIn('user_id', $formatted_address)->get();
        $data = array();
        foreach ($dataRow as $key => $value) {
            // dd($value['cards']);
            // dd($value->cards);
            $data[] = $value['cards'];
        }
        return $data;
    }
}
