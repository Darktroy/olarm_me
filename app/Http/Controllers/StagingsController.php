<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\staging;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class StagingsController extends Controller
{

    /**
     * Display a listing of the stagings.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $stagings = staging::with('user')->paginate(25);

        return view('stagings.index', compact('stagings'));
    }

    /**
     * Show the form for creating a new staging.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();
        
        return view('stagings.create', compact('users'));
    }

    /**
     * Store a new staging in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            staging::create($data);

            return redirect()->route('stagings.staging.index')
                             ->with('success_message', 'Staging was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified staging.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $staging = staging::with('user')->findOrFail($id);

        return view('stagings.show', compact('staging'));
    }

    /**
     * Show the form for editing the specified staging.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $staging = staging::findOrFail($id);
        $users = User::pluck('id','id')->all();

        return view('stagings.edit', compact('staging','users'));
    }

    /**
     * Update the specified staging in the storage.
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
            
            $staging = staging::findOrFail($id);
            $staging->update($data);

            return redirect()->route('stagings.staging.index')
                             ->with('success_message', 'Staging was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified staging from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $staging = staging::findOrFail($id);
            $staging->delete();

            return redirect()->route('stagings.staging.index')
                             ->with('success_message', 'Staging was successfully deleted!');

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
            'staging_id' => 'required',
            'user_id' => 'required',
            'registration' => 'string|min:1|nullable',
            'active_account' => 'numeric|nullable',
            'creation_own_profile' => 'string|min:1|nullable',
            'creation_own_card' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }
    
    public function showStage(Request $request) {
        
        $user = Auth::user();
        try {
            DB::beginTransaction();
            $data = staging::where('user_id',$user->id)->get();
            if(count($data)==0){
                throw new Exception('no data found for this user');
            }
            DB::commit();
                    return response()->json([
//                        'UserDetails' =>  $user,
                        'message' =>  'your account is Activated',
                        'status' => 'success','status-code'=>200,
                        'data' => $data,
                    ],200);
        } catch (Exception $exc) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $ex->getMessage(),'status-code'=>403,
                        'errorData' => $ex->getMessage()
                    ],200);
        }

    }
}
