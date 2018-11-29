<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\messag_record;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Validation\Rule;
use Exception;

class MessagRecordsController extends Controller
{

    /**
     * Display a listing of the messag records.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $messagRecords = messag_record::with('user')->paginate(25);

        return view('messag_records.index', compact('messagRecords'));
    }

    /**
     * Show the form for creating a new messag record.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();
        
        return view('messag_records.create', compact('users'));
    }

    /**
     * Store a new messag record in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            messag_record::create($data);

            return redirect()->route('messag_records.messag_record.index')
                             ->with('success_message', 'Messag Record was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified messag record.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $messagRecord = messag_record::with('user')->findOrFail($id);

        return view('messag_records.show', compact('messagRecord'));
    }

    /**
     * Show the form for editing the specified messag record.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $messagRecord = messag_record::findOrFail($id);
        $users = User::pluck('id','id')->all();

        return view('messag_records.edit', compact('messagRecord','users'));
    }

    /**
     * Update the specified messag record in the storage.
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
            
            $messagRecord = messag_record::findOrFail($id);
            $messagRecord->update($data);

            return redirect()->route('messag_records.messag_record.index')
                             ->with('success_message', 'Messag Record was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified messag record from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $messagRecord = messag_record::findOrFail($id);
            $messagRecord->delete();

            return redirect()->route('messag_records.messag_record.index')
                             ->with('success_message', 'Messag Record was successfully deleted!');

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
            'messag_record_id' => 'required',
            'email' => 'nullable',
            'title_of_message' => 'numeric|nullable',
            'message' => 'numeric|nullable',
            'user_id' => 'nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

    public function sendingTheMessage(Request $request) {
         
        $user = Auth::user();
        $data = $request->all();
        $messageRecordObject = new messag_record();
        try {
            DB::beginTransaction();
            $data = $messageRecordObject->snedContactUsMessage($user->id,$request);
//        logs::create(array('user_id'=>$user->id, 'log'=>$user->first_name.' has been remove system user','system_id'=>$data['system_id']));  
            DB::commit();
            return response()->json([ 'status' => 'success','status-code'=>200,'data' => $data],200); 
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'data' => $ex->getMessage(),
                'error-data' => $ex->getMessage(),'status-code'=>403, 
                'special'=>$ex->getLine().' '.$ex->getFile()],200);
        }
    }
}
