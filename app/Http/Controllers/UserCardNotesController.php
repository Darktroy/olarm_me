<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Card;
use App\Models\user_card_note;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserCardNotesController extends Controller
{
    /**
     * Display a listing of the user card notes.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $userCardNotes = user_card_note::with('user', 'card')->paginate(25);

        return view('user_card_notes.index', compact('userCardNotes'));
    }

    /**
     * Show the form for creating a new user card note.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id', 'id')->all();
        $cards = Card::pluck('card_id', 'id')->all();

        return view('user_card_notes.create', compact('users', 'cards'));
    }

    /**
     * Store a new user card note in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            $user = Auth::user();
            DB::beginTransaction();
            $userCardNote_object = new user_card_note();
            $userCardNote = $userCardNote_object->storeNote($request, $user);
            DB::commit();

            return response()->json([
                    'data' => $userCardNote,
                    'status' => 'success', 'status-code' => 200,
                ], 200);
        } catch (Exception $exception) {
            DB::rollBack();

            return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),
                  'special-data' => $exception->getLine().' '.$exception->getFile(), 'status-code' => 403,
                    ], 200);
        }
    }

    /**
     * Display the specified user card note.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $userCardNote = user_card_note::with('user', 'card')->findOrFail($id);

        return view('user_card_notes.show', compact('userCardNote'));
    }

    /**
     * Show the form for editing the specified user card note.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $userCardNote = user_card_note::findOrFail($id);
        $users = User::pluck('id', 'id')->all();
        $cards = Card::pluck('card_id', 'id')->all();

        return view('user_card_notes.edit', compact('userCardNote', 'users', 'cards'));
    }

    /**
     * Update the specified user card note in the storage.
     *
     * @param int                     $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            $data = $this->getData($request);

            $userCardNote = user_card_note::findOrFail($id);
            $userCardNote->update($data);

            return redirect()->route('user_card_notes.user_card_note.index')
                             ->with('success_message', 'User Card Note was successfully updated.');
        } catch (Exception $exception) {
            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified user card note from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $userCardNote = user_card_note::findOrFail($id);
            $userCardNote->delete();

            return redirect()->route('user_card_notes.user_card_note.index')
                             ->with('success_message', 'User Card Note was successfully deleted.');
        } catch (Exception $exception) {
            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
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
            'user_id' => 'nullable',
            'card_id' => 'nullable',
            'note' => 'string|min:1|max:1000',
        ];

        $data = $request->validate($rules);

        return $data;
    }
}
