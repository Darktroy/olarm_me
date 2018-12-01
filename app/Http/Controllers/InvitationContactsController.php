<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\invitation_contacts;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\helperVars;
    use Validator;
use Exception;

class InvitationContactsController extends Controller
{

    /**
     * Display a listing of the invitation contacts.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $invitationContactsObjects = invitation_contacts::with('inviteduser')->paginate(25);

        return view('invitation_contacts.index', compact('invitationContactsObjects'));
    }

    /**
     * Show the form for creating a new invitation contacts.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $invitedUsers = User::pluck('id','id')->all();
        
        return view('invitation_contacts.create', compact('invitedUsers'));
    }

    /**
     * Store a new invitation contacts in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        try {
            DB::beginTransaction();
            
//            invitation_contacts::create($data);
            $userId = $user->id;
            $invitationModelObject = new invitation_contacts();
            $data = $invitationModelObject->storeInvitation($request, $userId);
            
            DB::commit();
                    return response()->json([
                        'data' =>  $data,
                        'message' =>  'Success',
                        'status' => 'success','status-code'=>200, 'code'=>200
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

    /**
     * Display the specified invitation contacts.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $invitationContacts = invitation_contacts::with('inviteduser')->findOrFail($id);

        return view('invitation_contacts.show', compact('invitationContacts'));
    }

    /**
     * Show the form for editing the specified invitation contacts.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $invitationContacts = invitation_contacts::findOrFail($id);
        $invitedUsers = User::pluck('id','id')->all();

        return view('invitation_contacts.edit', compact('invitationContacts','invitedUsers'));
    }

    /**
     * Update the specified invitation contacts in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
            
    }

    /**
     * Remove the specified invitation contacts from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
       
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
            'invitation_contacts_id' => 'nullable',
            'phonecode' => 'string|min:1|nullable',
            'phone' => 'string|min:1|nullable',
            'invited_user_id' => 'nullable',
            'invitation_code' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
