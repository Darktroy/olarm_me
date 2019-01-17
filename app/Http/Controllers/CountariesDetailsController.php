<?php

namespace App\Http\Controllers;

use App\Models\countariesDetails;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\helperVars;
    use Validator;
use Exception;
    
class CountariesDetailsController extends Controller
{

    /**
     * Display a listing of the countaries details.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $countariesDetailsObjects = countariesDetails::paginate(25);

        return view('countaries_details.index', compact('countariesDetailsObjects'));
    }

    /**
     * Show the form for creating a new countaries details.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('countaries_details.create');
    }

    /**
     * Store a new countaries details in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            countariesDetails::create($data);

            return redirect()->route('countaries_details.countaries_details.index')
                             ->with('success_message', 'Countaries Details was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified countaries details.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $countariesDetails = countariesDetails::findOrFail($id);

        return view('countaries_details.show', compact('countariesDetails'));
    }

    /**
     * Show the form for editing the specified countaries details.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $countariesDetails = countariesDetails::findOrFail($id);
        

        return view('countaries_details.edit', compact('countariesDetails'));
    }

    /**
     * Update the specified countaries details in the storage.
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
            
            $countariesDetails = countariesDetails::findOrFail($id);
            $countariesDetails->update($data);

            return redirect()->route('countaries_details.countaries_details.index')
                             ->with('success_message', 'Countaries Details was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified countaries details from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $countariesDetails = countariesDetails::findOrFail($id);
            $countariesDetails->delete();

            return redirect()->route('countaries_details.countaries_details.index')
                             ->with('success_message', 'Countaries Details was successfully deleted!');

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
            'countariesDetails_id' => 'required|numeric|min:0|max:4294967295',
            'countaryName' => 'numeric|nullable',
            'cityName' => 'string|min:1|nullable',
            'district' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

    public function getCountriesList() {
        $objCountaries = new countariesDetails();
        
        $data = $objCountaries->getCountaries();
        
                     return response()->json([
                        'data' =>  $data,
                        'message' =>  'From Iessa with love',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
    }
    //getCitiesList
    public function getCitiesList(Request $request) {
        $objCountaries = new countariesDetails();
        try {

                $data = $objCountaries->getCities($request);
        
                     return response()->json([
                        'data' =>  $data,
                        'message' =>  'From Iessa with love',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
            
        } catch (Exception $exception) {
            return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'status-code'=>403 , 'code'=>100
                    ],200);
        }
    }
    
    //getDistrictesList
    public function getDistrictesList(Request $request) {
        $objCountaries = new countariesDetails();
        try {

                $data = $objCountaries->getDistricts($request);
        
                     return response()->json([
                        'data' =>  $data,
                        'message' =>  'From Iessa with love',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
            
        } catch (Exception $exception) {
            return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'status-code'=>403 , 'code'=>100
                    ],200);
        }
    }
}
