<?php

namespace App\Http\Controllers;

use App\Models\userLocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;
use Validator;
use Exception;

class UserLocationsController extends Controller
{
    private $userLocationObj = Null;
    public function __construct() {
        $this->userLocationObj = new userLocation();
    }
    /**
     * Display a listing of the user locations.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $userLocations = userLocation::paginate(25);

        return view('user_locations.index', compact('userLocations'));
    }

    /**
     * Show the form for creating a new user location.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('user_locations.create');
    }

    /**
     * Store a new user location in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            userLocation::create($data);

            return redirect()->route('user_locations.user_location.index')
                             ->with('success_message', 'User Location was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified user location.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $userLocation = userLocation::findOrFail($id);

        return view('user_locations.show', compact('userLocation'));
    }

    /**
     * Show the form for editing the specified user location.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $userLocation = userLocation::findOrFail($id);
        

        return view('user_locations.edit', compact('userLocation'));
    }

    /**
     * Update the specified user location in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $userLocation = userLocation::findOrFail($id);
            $userLocation->update($data);

            return redirect()->route('user_locations.user_location.index')
                             ->with('success_message', 'User Location was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified user location from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $userLocation = userLocation::findOrFail($id);
            $userLocation->delete();

            return redirect()->route('user_locations.user_location.index')
                             ->with('success_message', 'User Location was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'lat' => 'numeric|min:1|required',
            'long' => 'numeric|min:1|required'
        ];
        
        $data = $request->validate($rules);
//            dd($data['status']);


        return $data;
    }

    public function setMyLocation(Request $request) {
        $user = Auth::user();
        try {
            DB::beginTransaction();
            $add_array = $this->userLocationObj->setLocation($request,$user->id);
            DB::commit();
                    return response()->json([
                        'data' =>  $add_array->formatted_address,
                        'status' => 'success','status-code'=>200,'code'=>200
                    ],200);

        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403,'code'=>100
                    ],200);
        }

    }
    
    public function setMyLocationAndNearBy(Request $request) {
        $user = Auth::user();
        try {
            DB::beginTransaction();
            $add_array = $this->userLocationObj->setLocation($request,$user->id);
            $data = $this->userLocationObj->getCardsNearBy($add_array->formatted_address);
            DB::commit();
                    return response()->json([
//                        'data' =>  $add_array->formatted_address,
                        'data' =>  $data,
                        'status' => 'success','status-code'=>200,'code'=>200
                    ],200);

        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403,'code'=>100
                    ],200);
        }
    }
}
