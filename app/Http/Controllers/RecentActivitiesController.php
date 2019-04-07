<?php

namespace App\Http\Controllers;

use App\User;
use App\ActionByUser;
use Illuminate\Http\Request;
use App\Models\recent_activity;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
use Exception;

class RecentActivitiesController extends Controller
{

    /**
     * Display a listing of the recent activities.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $recentActivities = recent_activity::with('user','actionbyuser')->paginate(25);

        return view('recent_activities.index', compact('recentActivities'));
    }

    /**
     * Show the form for creating a new recent activity.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();
$actionByUsers = ActionByUser::pluck('id','id')->all();
        
        return view('recent_activities.create', compact('users','actionByUsers'));
    }

    /**
     * Store a new recent activity in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            recent_activity::create($data);

            return redirect()->route('recent_activities.recent_activity.index')
                             ->with('success_message', 'Recent Activity was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified recent activity.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $recentActivity = recent_activity::with('user','actionbyuser')->findOrFail($id);

        return view('recent_activities.show', compact('recentActivity'));
    }

    /**
     * Show the form for editing the specified recent activity.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $recentActivity = recent_activity::findOrFail($id);
        $users = User::pluck('id','id')->all();
$actionByUsers = ActionByUser::pluck('id','id')->all();

        return view('recent_activities.edit', compact('recentActivity','users','actionByUsers'));
    }

    /**
     * Update the specified recent activity in the storage.
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
            
            $recentActivity = recent_activity::findOrFail($id);
            $recentActivity->update($data);

            return redirect()->route('recent_activities.recent_activity.index')
                             ->with('success_message', 'Recent Activity was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified recent activity from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $recentActivity = recent_activity::findOrFail($id);
            $recentActivity->delete();

            return redirect()->route('recent_activities.recent_activity.index')
                             ->with('success_message', 'Recent Activity was successfully deleted!');

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
            'recent_activity_id' => 'nullable',
            'user_id' => 'nullable',
            'action_by_user_id' => 'nullable',
            'description' => 'string|min:1|max:1000|nullable',
            'profile_image_url' => 'numeric|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

    public function getRecentActivity() {
        $user = Auth::user();
        $data = recent_activity::where('user_id',$user->id)->orWhere('action_by_user_id',$user->id)->get()->toArray();
         return response()->json([
                        'data' =>  $data,
                        'message' =>  'Success',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);
    }
    
    
}
