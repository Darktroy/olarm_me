<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\recommendedCards;
use App\Http\Controllers\Controller;
use Exception;

class RecommendedCardsController extends Controller
{

    /**
     * Display a listing of the recommended cards.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $recommendedCardsObjects = recommendedCards::with('card','recommendedbyuser','recommendedforuser')->paginate(25);

        return view('recommended_cards.index', compact('recommendedCardsObjects'));
    }

    /**
     * Show the form for creating a new recommended cards.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $cards = Card::pluck('card_id','id')->all();
$recommendedByUsers = User::pluck('id','id')->all();
$recommendedForUsers = User::pluck('id','id')->all();
        
        return view('recommended_cards.create', compact('cards','recommendedByUsers','recommendedForUsers'));
    }

    /**
     * Store a new recommended cards in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            recommendedCards::create($data);

            return redirect()->route('recommended_cards.recommended_cards.index')
                             ->with('success_message', 'Recommended Cards was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified recommended cards.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $recommendedCards = recommendedCards::with('card','recommendedbyuser','recommendedforuser')->findOrFail($id);

        return view('recommended_cards.show', compact('recommendedCards'));
    }

    /**
     * Show the form for editing the specified recommended cards.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $recommendedCards = recommendedCards::findOrFail($id);
        $cards = Card::pluck('card_id','id')->all();
$recommendedByUsers = User::pluck('id','id')->all();
$recommendedForUsers = User::pluck('id','id')->all();

        return view('recommended_cards.edit', compact('recommendedCards','cards','recommendedByUsers','recommendedForUsers'));
    }

    /**
     * Update the specified recommended cards in the storage.
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
            
            $recommendedCards = recommendedCards::findOrFail($id);
            $recommendedCards->update($data);

            return redirect()->route('recommended_cards.recommended_cards.index')
                             ->with('success_message', 'Recommended Cards was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified recommended cards from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $recommendedCards = recommendedCards::findOrFail($id);
            $recommendedCards->delete();

            return redirect()->route('recommended_cards.recommended_cards.index')
                             ->with('success_message', 'Recommended Cards was successfully deleted!');

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
            'card_id' => 'nullable',
            'recommended_by_user_id' => 'nullable',
            'recommended_for_user_id' => 'nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }
    
    public function recommendCard(Request $request) {
        $user = Auth::user();
        try {
                DB::beginTransaction();
                $RCobject = new recommendedCards();
                
                $data = $RCobject->recommendCardtouser($request, $user->id);
               
                DB::commit();
                return response()->json([
                    'data' =>  $data,
                    'status' => 'success','status-code'=>200,'code'=>200
                ],200);
        } catch (Exception $exception) {
            DB::rollBack();
              return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),
                  'special-data'=>$exception->getLine().' '.$exception->getFile(),'status-code'=>403,'code'=>100
                    ],200);
        }
    }

}
