<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\profile;
use Illuminate\Http\Request;
use App\Models\TemplateLayout;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
use Exception;

class ProfilesController extends Controller
{

    /**
     * Display a listing of the profiles.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $profiles = profile::with('user','templatelayout')->paginate(25);

        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new profile.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();
$templateLayouts = TemplateLayout::pluck('id','id')->all();
        
        return view('profiles.create', compact('users','templateLayouts'));
    }

    /**
     * Store a new profile in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
            dd(public_path('/newsfeedImanges'));
        try {
            DB::beginTransaction();
            $data = $this->getData($request);
            $imageName='';
            if (isset($data['imagepath']) &&!empty($data['imagepath'])){ 
                    $imageName = 'news_feed_'.time().'.'.$data['imagepath']->getClientOriginalExtension();
                    $data['imagepath']->move(public_path('/newsfeedImanges'), $imageName);
                $data['imagepath'] =env('news_feed_main_image_url').$imageName;
            } 
            profile::create($data);
            DB::commit();
                    return response()->json([
//                        'UserDetails' =>  $user,
                        'message' =>  'your account is Activated',
                        'status' => 'success','status-code'=>200,
                        'data' => '',
                    ],200);
        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $ex->getMessage(),'status-code'=>403
                    ],200);
        }
    }

    /**
     * Display the specified profile.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $profile = profile::with('user','templatelayout')->findOrFail($id);

        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified profile.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $profile = profile::findOrFail($id);
        $users = User::pluck('id','id')->all();
$templateLayouts = TemplateLayout::pluck('id','id')->all();

        return view('profiles.edit', compact('profile','users','templateLayouts'));
    }

    /**
     * Update the specified profile in the storage.
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
            
            $profile = profile::findOrFail($id);
            $profile->update($data);

            return redirect()->route('profiles.profile.index')
                             ->with('success_message', 'Profile was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified profile from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $profile = profile::findOrFail($id);
            $profile->delete();

            return redirect()->route('profiles.profile.index')
                             ->with('success_message', 'Profile was successfully deleted!');

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
            'profile_id' => 'nullable',
            'user_id' => 'nullable',
            'picture' => ['file','nullable'],
            'gender' => 'string|min:1|nullable',
            'country' => 'numeric|nullable',
            'city' => 'string|min:1|nullable',
            'district' => 'string|min:1|nullable',
            'field' => 'string|min:1|nullable',
            'industry' => 'string|min:1|nullable',
            'specialty' => 'string|min:1|nullable',
            'privacy' => 'string|min:1|nullable',
            'template_layout_id' => 'nullable',
            'logo' => 'string|min:1|nullable',
            'about' => 'string|min:1|nullable',
            'alias' => 'string|min:1|nullable',
            'facebook_url' => 'string|min:1|nullable',
            'twitter_url' => 'string|min:1|nullable',
            'instagram_url' => 'string|min:1|nullable',
            'youtube_url' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);
        if ($request->has('custom_delete_picture')) {
            $data['picture'] = null;
        }
        if ($request->hasFile('picture')) {
            $data['picture'] = $this->moveFile($request->file('picture'));
        }

        return $data;
    }
  
    /**
     * Moves the attached file to the server.
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return string
     */
    protected function moveFile($file)
    {
        if (!$file->isValid()) {
            return '';
        }
        
        return $file->store(config('codegenerator.files_upload_path'), config('filesystems.default'));
    }
}
