<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use App\Models\cards;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\helperVars;
    use Validator;
use Exception;
class RequestsController extends Controller
{

    /**
     * Display a listing of the requests.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();   
        $requester_card = cards::where('user_id',$user->id)->where('create_by',$user->id)->
                            where('personal',1)->get();
        if(count($requester_card)==0){
        return response()->json(['data' =>'No personal card for this account','status' => 'success','status-code'=>200],200);
        }
        $requestsObjects_to_me = Requests::with('card_from')->where('to_id',$requester_card[0]['card_id'])->get();
        $requestsObjects_from_me = Requests::with('card_to')->where('from_id',$requester_card[0]['card_id'])->get();
        $data =[];
        $data['to_me'] =$requestsObjects_to_me;
        $data['by_me'] =$requestsObjects_from_me;

        return response()->json(['data' =>$data,'status' => 'success','status-code'=>200],200);
    }

    /**
     * Show the form for creating a new requests.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $froms = From::pluck('id','id')->all();
$tos = To::pluck('id','id')->all();
        
        return view('requests.create', compact('froms','tos'));
    }

    /**
     * Store a new requests in the storage.
     *
     * @param App\Http\Requests\RequestsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        try {
                DB::beginTransaction();
                $request_order = Requests::addRequest($user->id, $request);
                DB::commit();
                return response()->json(['data' =>  $request_order,'status' => 'success','status-code'=>200],200);
        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json(['status' => 'error','data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403],200);
        }
    }
    
    public function approveRequest(Request $request)
    {
        $user = Auth::user();
        try {
                DB::beginTransaction();
                $approved_request = Requests::approveRequest($user->id, $request);
                DB::commit();
                return response()->json(['data' =>  $approved_request,'status' => 'success','status-code'=>200],200);
        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json(['status' => 'error','data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403],200);
        }
    }

    public function deleteRequest(Request $request)
    {
        $user = Auth::user();
        try {
                DB::beginTransaction();
                $approved_request = Requests::removeRequest($user->id, $request);
                DB::commit();
                return response()->json(['data' =>  $approved_request,'status' => 'success','status-code'=>200],200);
        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json(['status' => 'error','data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403],200);
        }
    }

    /**
     * Display the specified requests.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $requests = Requests::with('from','to')->findOrFail($id);

        return view('requests.show', compact('requests'));
    }

    /**
     * Show the form for editing the specified requests.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $requests = Requests::findOrFail($id);
        $froms = From::pluck('id','id')->all();
$tos = To::pluck('id','id')->all();

        return view('requests.edit', compact('requests','froms','tos'));
    }

    /**
     * Update the specified requests in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\RequestsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, RequestsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $requests = Requests::findOrFail($id);
            $requests->update($data);

            return redirect()->route('requests.requests.index')
                             ->with('success_message', 'Requests was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified requests from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $requests = Requests::findOrFail($id);
            $requests->delete();

            return redirect()->route('requests.requests.index')
                             ->with('success_message', 'Requests was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
    
    
    protected function getData(Request $request)
    {
        $rules = [
            'to_id' => 'int|min:1|exists:cards,card_id',
     
        ];
        $messages =[
            'to_id.required' => 'Please Enter valid picture',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }



}
