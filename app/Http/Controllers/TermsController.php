<?php

namespace App\Http\Controllers;

use App\Models\terms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class TermsController extends Controller
{

    /**
     * Display a listing of the terms.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $termsObjects = terms::paginate(25);

        return view('terms.index', compact('termsObjects'));
    }

    /**
     * Show the form for creating a new terms.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('terms.create');
    }

    /**
     * Store a new terms in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            terms::create($data);

            return redirect()->route('terms.terms.index')
                             ->with('success_message', 'Terms was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified terms.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $terms = terms::findOrFail($id);

        return view('terms.show', compact('terms'));
    }

    /**
     * Show the form for editing the specified terms.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $terms = terms::findOrFail($id);
        

        return view('terms.edit', compact('terms'));
    }

    /**
     * Update the specified terms in the storage.
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
            
            $terms = terms::findOrFail($id);
            $terms->update($data);

            return redirect()->route('terms.terms.index')
                             ->with('success_message', 'Terms was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified terms from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $terms = terms::findOrFail($id);
            $terms->delete();

            return redirect()->route('terms.terms.index')
                             ->with('success_message', 'Terms was successfully deleted!');

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
            'terms_id' => 'nullable',
            'name' => 'string|min:1|max:255|nullable',
            'description' => 'string|min:1|max:100000|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
