<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\emailSignature;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;
use Exception;

class EmailSignaturesController extends Controller
{

    /**
     * Display a listing of the email signatures.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $emailSignatures = emailSignature::with('user')->paginate(25);

        return view('email_signatures.index', compact('emailSignatures'));
    }

    /**
     * Show the form for creating a new email signature.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();
        
        return view('email_signatures.create', compact('users'));
    }

    /**
     * Store a new email signature in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            emailSignature::create($data);

            return redirect()->route('email_signatures.email_signature.index')
                             ->with('success_message', 'Email Signature was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified email signature.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $emailSignature = emailSignature::with('user')->findOrFail($id);

        return view('email_signatures.show', compact('emailSignature'));
    }

    /**
     * Show the form for editing the specified email signature.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $emailSignature = emailSignature::findOrFail($id);
        $users = User::pluck('id','id')->all();

        return view('email_signatures.edit', compact('emailSignature','users'));
    }

    /**
     * Update the specified email signature in the storage.
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
            
            $emailSignature = emailSignature::findOrFail($id);
            $emailSignature->update($data);

            return redirect()->route('email_signatures.email_signature.index')
                             ->with('success_message', 'Email Signature was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified email signature from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $emailSignature = emailSignature::findOrFail($id);
            $emailSignature->delete();

            return redirect()->route('email_signatures.email_signature.index')
                             ->with('success_message', 'Email Signature was successfully deleted!');

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
            'emailSignature_id' => 'required',
            'user_id' => 'nullable',
            'imageName' => 'numeric|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

    public function showEmailSignature() {
        $user = Auth::user();
        return response()->json([
                        'data' =>  url('/emailSignature/em123.jpeg'),
                        'message' =>  'Success',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
    }
    
}
