<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
    use Validator;
use Exception;

class countariesDetails extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countaries_details';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'countariesDetails_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'countaryName',
                  'cityName',
                  'district'
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
    
    public function getCountaries() {
            $countariesList = countariesDetails::select('countaryName')->distinct()->get();
            if(count($countariesList) == 0 ){
                return Null;
            }
            $data = [];
            foreach ($countariesList as $key => $value) {
                $data[] = $value['countaryName'];
            }
            return $data;
    }

    public function getCities(Request $request) {
        $rules = [ 'countaryName' => 'required|string|min:1|exists:countaries_details,countaryName', ];
        $messages =[ 'countaryName.required' => 'Please Enter valid industry or existance ', ];
        $data = Validator::make($request->all(), $rules, $messages);
        
        if ($data->fails()) { 
            throw new Exception('Can not find crossponding countary');
        }
        $data = $request->all();
        $citiesList = countariesDetails::where('countaryName',$data['countaryName'])->select('cityName')->distinct()->get();
            if(count($citiesList) == 0 ){
                return Null;
            }
            $data = [];
            foreach ($citiesList as $key => $value) {
                $data[] = $value['cityName'];
            }
            return $data;
    }
    public function getDistricts(Request $request) {
        $rules = [ 'cityName' => 'required|string|min:1|exists:countaries_details,cityName', ];
        $messages =[ 'cityName.required' => 'Please Enter valid industry or existance ', ];
        $data = Validator::make($request->all(), $rules, $messages);
        
        if ($data->fails()) { 
            throw new Exception('Can not find crossponding City');
        }
        $data = $request->all();
        $districtList = countariesDetails::where('cityName',$data['cityName'])->select('district')->distinct()->get();
            if(count($districtList) == 0 ){
                return Null;
            }
            $data = [];
            foreach ($districtList as $key => $value) {
                $data[] = $value['district'];
            }
            return $data;
    }

}
