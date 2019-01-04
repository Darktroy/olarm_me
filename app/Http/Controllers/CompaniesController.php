<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\company;
use App\Models\branchs;
use App\Models\departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Auth; 
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
        $user = Auth::user();
        $companies = company::paginate(25);

        return view('companyadminpanel.masterLayout', compact('companies'));
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
//          createEmployee
    public function createEmployee()
    {
        $user = Auth::user();
        if($user == null){
            redirect('/');
        }
        
        
        $companyObj = new company();
        $branchObject = new branchs();
        $departmentObj = new departments();
        $branches = $branchObject->showAll($user->id);
        return view('companies.createEmployee');
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
        $companyObj = new self();
        try {
            /*
           
    "company_name" => "d"
    "company_registry_paper" => "مطابخ.png"
    "company_tax_card" => "مج شوربه.png"
    "company_landline" => "255"
    "company_fax" => "45"
    "company_address" => "asc54 875"
    "company_website" => "http://www.twest.com"
            */
        DB::beginTransaction();

        $userdetails = $companyObj->createUser($request);
       $data = $request->all();
//       dd($request->hasFile("company_registry_paper"));
        $data = $this->getData($request);
        if ($data->fails()) { 
//            dd($data->errors()->toArray());
            throw new Exception();
        }
       $data = $request->all();  
       if($request->hasFile("company_registry_paper")){
                if (isset($data['company_registry_paper']) &&!empty($data['company_registry_paper'])){ 
                    $imageName = 'RP'.time().'.'.$data['company_registry_paper']->getClientOriginalExtension();
                    $data['company_registry_paper']->move(public_path('/companyregistrypaper'), $imageName);
                    $data['company_registery']=$imageName;    
                } 
            }
       if($request->hasFile("company_tax_card")){
                if (isset($data['company_tax_card']) &&!empty($data['company_tax_card'])){ 
                     
                    $imageName = 'TC'.time().'.'.$data['company_tax_card']->getClientOriginalExtension();
                    $data['company_tax_card']->move(public_path('/companytaxcard'), $imageName);
                    $data['company_tax_card']=$imageName;   
                } 
            }
            $data['user_id']= $userdetails['id'];
            company::create($data);
            DB::commit();
            return redirect()->route('companies.company.index')
                             ->with('success_message', 'Company was successfully added!');

        } catch (Exception $exception) { 
              DB::rollBack();
            return back()->withInput()
                         ->withErrors(['unexpected_error' => $exception->getMessage()]);
//                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
    
    private function createUser(Request $request) {
        
         $validator = Validator::make($request->all(), [ 
                      'admin_first_name' => 'required', 
                      'admin_last_name' => 'required', 
                      'admin_phone' => 'required', 
                      'admin_email' => 'required|email|unique:users,email', 
                      'password' => 'required', 
                      'c_password' => 'required|same:password', 
//                      'lang' => 'required|string|min:2|max:2', 
                      'accept_terms' => 'required|int|size:1', 
                    ]);
                    if ($validator->fails()) { 
//                      return response()->json(['data'=>$validator->errors(),'status'=>'erroe','status-code'=>'403','code'=>100],200);
                        throw Exception();
                    }
                    $postArray = $request->all(); 
                    $postArray['name'] = $postArray['admin_first_name'].' '.$postArray['admin_last_name'];
                    $postArray['first_name'] = $postArray['admin_first_name'];
                    $postArray['last_name'] = $postArray['admin_last_name'];
                    $postArray['email'] = $postArray['admin_email'];
//                    $postArray['password'] = bcrypt($postArray['password']); 
                    $postArray['password'] = Hash::make($postArray['password']); 
                    $user = User::create($postArray); 
                    return $user;
//                    $success['token'] =  $user->createToken('LaraPassport x')->accessToken; 
                    
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

//    showingInfo.blade
    
    
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
      
        $rules = [
//           'company_card_template' => 'file|min:1',
            'company_name' => 'required|string|min:1',
            'company_registry_paper' => 'required|file',
            'company_tax_card' => 'required|file',
            'company_landline' => 'required|string|min:1',
            'company_fax' => 'required|string|min:1|nullable',
            'company_address' => 'required|string|min:1',
            'company_website' => 'string|min:1',
//            'company_about' => 'string|min:1',
//            'company_facebook' => 'string|min:1|nullable',
//            'company_twitter' => 'string|min:1|nullable',
//            'company_instagram' => 'string|min:1|nullable',
//            'company_youtube' => 'string|min:1|nullable',
//            'company_field' => 'string|min:1',
//            'company_industry' => 'string|min:1',
//            'company_speciality' => 'string|min:1',
//            'company_countary' => 'string',
//            'company_city' => 'string|min:1',
//            'company_district' => 'string|min:1', 
     
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
