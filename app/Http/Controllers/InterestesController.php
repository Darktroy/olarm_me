<?php

namespace App\Http\Controllers;

use App\Models\interestes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class InterestesController extends Controller
{

    /**
     * Display a listing of the interestes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $interestesObjects = interestes::paginate(25);

        return view('interestes.index', compact('interestesObjects'));
    }

    /**
     * Show the form for creating a new interestes.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('interestes.create');
    }

    /**
     * Store a new interestes in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            interestes::create($data);

            return redirect()->route('interestes.interestes.index')
                             ->with('success_message', 'Interestes was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified interestes.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $interestes = interestes::findOrFail($id);

        return view('interestes.show', compact('interestes'));
    }

    /**
     * Show the form for editing the specified interestes.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $interestes = interestes::findOrFail($id);
        

        return view('interestes.edit', compact('interestes'));
    }

    /**
     * Update the specified interestes in the storage.
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
            
            $interestes = interestes::findOrFail($id);
            $interestes->update($data);

            return redirect()->route('interestes.interestes.index')
                             ->with('success_message', 'Interestes was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified interestes from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $interestes = interestes::findOrFail($id);
            $interestes->delete();

            return redirect()->route('interestes.interestes.index')
                             ->with('success_message', 'Interestes was successfully deleted!');

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
            'interest_id' => 'required',
            'name' => 'string|min:1|max:255|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
