<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Card;
use App\Models\user_card_reminder;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserCardRemindersController extends Controller
{
    /**
     * Display a listing of the user card reminders.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $userCardReminders = user_card_reminder::with('usercardreminder', 'user', 'card')->paginate(25);

        return view('user_card_reminders.index', compact('userCardReminders'));
    }

    /**
     * Show the form for creating a new user card reminder.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $userCardReminders = UserCardReminder::pluck('id', 'id')->all();
        $users = User::pluck('id', 'id')->all();
        $cards = Card::pluck('id', 'id')->all();

        return view('user_card_reminders.create', compact('userCardReminders', 'users', 'cards'));
    }

    /**
     * Store a new user card reminder in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            $user = Auth::user();
            $data = $this->getData($request);
            $userCardReminder_object = new user_card_reminder();
            DB::beginTransaction();
            $data = $userCardReminder_object->storeUCR($request, $user);
            DB::commit();

            return response()->json([
                    'data' => $data,
                    'status' => 'success', 'status-code' => 200,
                ], 200);
        } catch (Exception $exception) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'data' => $exception->getMessage(), 'details' => $exception->getLine().' '.$exception->getFile(),
            'status-code' => 403, 'code' => 100,
            ], 200);
        }
    }

    /**
     * Display the specified user card reminder.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $userCardReminder = user_card_reminder::with('usercardreminder', 'user', 'card')->findOrFail($id);

        return view('user_card_reminders.show', compact('userCardReminder'));
    }

    /**
     * Show the form for editing the specified user card reminder.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified user card reminder in the storage.
     *
     * @param int                     $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
    }

    /**
     * Remove the specified user card reminder from the storage.
     *
     * @param int $id
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
     *
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'card_id' => 'nullable',
            'date' => 'required|date_format:"d-m-Y"',
            'time' => 'required|date_format:"h:i"',
            // 'reminder' => 'string|min:1|nullable',
        ];
        $data = $request->validate($rules);
        // dd($data);
    }
}
