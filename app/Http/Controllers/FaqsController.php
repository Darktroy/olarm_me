<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class FaqsController extends Controller
{

    /**
     * Display a listing of the faqs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $faqs = faq::with('faq')->paginate(25);

        return view('faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new faq.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $faqs = Faq::pluck('id','faq_id')->all();
        
        return view('faqs.create', compact('faqs'));
    }

    /**
     * Store a new faq in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            faq::create($data);

            return redirect()->route('faqs.faq.index')
                             ->with('success_message', 'Faq was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified faq.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $faq = faq::with('faq')->findOrFail($id);

        return view('faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified faq.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $faq = faq::findOrFail($id);
        $faqs = Faq::pluck('id','faq_id')->all();

        return view('faqs.edit', compact('faq','faqs'));
    }

    /**
     * Update the specified faq in the storage.
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
            
            $faq = faq::findOrFail($id);
            $faq->update($data);

            return redirect()->route('faqs.faq.index')
                             ->with('success_message', 'Faq was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified faq from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $faq = faq::findOrFail($id);
            $faq->delete();

            return redirect()->route('faqs.faq.index')
                             ->with('success_message', 'Faq was successfully deleted!');

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
            'faq_id' => 'nullable',
            'question' => 'string|min:1|nullable',
            'answer' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
