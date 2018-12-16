<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

    use Validator;
use Exception;

class CompaniesController extends Controller
{

    /**
     * Display a listing of the companies.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $companies = company::paginate(25);

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new company.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('companies.registerComapny');
    }

    /**
     * Store a new company in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            /*
            "admin_first_name" => "s"
    "admin_last_name" => "s"
    "admin_email" => "s@f.com"
    "password" => "1"
    "c_password" => "1"
    "admin_phone" => "01245"
    "company_name" => "d"
    "company_registry_paper" => "مطابخ.png"
    "company_tax_card" => "مج شوربه.png"
    "company_landline" => "255"
    "company_fax" => "45"
    "company_address" => "asc54 875"
    "company_website" => "http://www.twest.com"
            */
            $data = $this->getData($request);
            dd($data);
            company::create($data);

            return redirect()->route('companies.company.index')
                             ->with('success_message', 'Company was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified company.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $company = company::findOrFail($id);

        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified company.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $company = company::findOrFail($id);
        

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified company in the storage.
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
            
            $company = company::findOrFail($id);
            $company->update($data);

            return redirect()->route('companies.company.index')
                             ->with('success_message', 'Company was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified company from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $company = company::findOrFail($id);
            $company->delete();

            return redirect()->route('companies.company.index')
                             ->with('success_message', 'Company was successfully deleted!');

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
      /**/
        $rules = [
           'company_card_template' => 'file|min:1',
            'company_name' => 'string|min:1',
            'company_logo' => 'file|min:1',
            'company_landline' => 'string|min:1',
            'company_fax' => 'string|min:1|nullable',
            'company_address' => 'string|min:1',
            'company_website' => 'string|min:1',
            'company_about' => 'string|min:1',
            'company_facebook' => 'string|min:1|nullable',
            'company_twitter' => 'string|min:1|nullable',
            'company_instagram' => 'string|min:1|nullable',
            'company_youtube' => 'string|min:1|nullable',
            'company_field' => 'string|min:1',
            'company_industry' => 'string|min:1',
            'company_speciality' => 'string|min:1',
            'company_countary' => 'string',
            'company_city' => 'string|min:1',
            'company_district' => 'string|min:1', 
     
        ];
        
//        $data = $request->validate($rules);
       
        $messages =[
            'picture.required' => 'Please Enter valid picture',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
//        return $data;
    }

}
