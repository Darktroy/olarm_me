<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Interest;
use Illuminate\Http\Request;
use App\Models\CardToInterest;
use App\Models\card_to_interests;
use App\Http\Controllers\Controller;
use Exception;

class CardToInterestsController extends Controller
{

    /**
     * Display a listing of the card to interests.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $cardToInterestsObjects = card_to_interests::with('cardtointerest','interest','user')->paginate(25);

        return view('card_to_interests.index', compact('cardToInterestsObjects'));
    }

    /**
     * Show the form for creating a new card to interests.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $cardToInterests = CardToInterest::pluck('id','card_to_interest_id')->all();
$interests = Interest::pluck('id','id')->all();
$users = User::pluck('id','id')->all();
        
        return view('card_to_interests.create', compact('cardToInterests','interests','users'));
    }

    /**
     * Store a new card to interests in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            card_to_interests::create($data);

            return redirect()->route('card_to_interests.card_to_interests.index')
                             ->with('success_message', 'Card To Interests was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified card to interests.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $cardToInterests = card_to_interests::with('cardtointerest','interest','user')->findOrFail($id);

        return view('card_to_interests.show', compact('cardToInterests'));
    }

    /**
     * Show the form for editing the specified card to interests.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $cardToInterests = card_to_interests::findOrFail($id);
        $cardToInterests = CardToInterest::pluck('id','card_to_interest_id')->all();
$interests = Interest::pluck('id','id')->all();
$users = User::pluck('id','id')->all();

        return view('card_to_interests.edit', compact('cardToInterests','cardToInterests','interests','users'));
    }

    /**
     * Update the specified card to interests in the storage.
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
            
            $cardToInterests = card_to_interests::findOrFail($id);
            $cardToInterests->update($data);

            return redirect()->route('card_to_interests.card_to_interests.index')
                             ->with('success_message', 'Card To Interests was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified card to interests from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $cardToInterests = card_to_interests::findOrFail($id);
            $cardToInterests->delete();

            return redirect()->route('card_to_interests.card_to_interests.index')
                             ->with('success_message', 'Card To Interests was successfully deleted!');

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
            'card_to_interest_id' => 'nullable',
            'interest_id' => 'nullable',
            'name' => 'string|min:1|max:255|nullable',
            'user_id' => 'nullable',
            'private' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
