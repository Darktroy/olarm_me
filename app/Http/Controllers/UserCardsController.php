<?php

namespace App\Http\Controllers;
//********************************

//namespace App\Http\Controllers;


//********************************
use App\User;
use App\Models\cards;
use App\Models\user_cards;
use App\Models\CardHolder;
use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\TemplateLayout;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth; 
    use Illuminate\Support\Facades\DB;
    use Validator;
use Exception;

class UserCardsController extends Controller
{

    /**
     * Display a listing of the user cards.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $userCardsObjects = user_cards::with('user','cardholder','card')->paginate(25);

        return view('user_cards.index', compact('userCardsObjects'));
    }

    /**
     * Show the form for creating a new user cards.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $users = User::pluck('id','id')->all();
$cardHolders = CardHolder::pluck('id','id')->all();
$cards = Card::pluck('privacy','id')->all();
        
        return view('user_cards.create', compact('users','cardHolders','cards'));
    }

    /**
     * Store a new user cards in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        try {
            DB::beginTransaction();
            $data = $this->getData($request);
            if ($data->fails()) { 
                return response()->json(['status' => 'error','error'=>$data->errors(),'status-code'=>401,'code'=>100],200);
            }
            $data = $request->all();
            $data['user_id']=$user->id;
            $user_cards = user_cards::create($data);

            DB::commit();
                    return response()->json([
                        'data' =>  $user_cards,
                        'message' =>  'Success',
                        'status' => 'success','status-code'=>200, 'code'=>200
                    ],200);

        } catch (Exception $exception) {
                DB::rollBack();
                return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(),'details'=>$exception->getLine().' '.$exception->getFile(),
                    'status-code'=>403, 'code'=>100
                    ],200);
        }
    }

    /**
     * Display the specified user cards.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $userCards = user_cards::with('user','cardholder','card')->findOrFail($id);

        return view('user_cards.show', compact('userCards'));
    }

    /**
     * Show the form for editing the specified user cards.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $userCards = user_cards::findOrFail($id);
        $users = User::pluck('id','id')->all();
$cardHolders = CardHolder::pluck('id','id')->all();
$cards = Card::pluck('privacy','id')->all();

        return view('user_cards.edit', compact('userCards','users','cardHolders','cards'));
    }

    /**
     * Update the specified user cards in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
         
    }

    /**
     * Remove the specified user cards from the storage.
     *
     * @param  int $id
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
     * @return array
     */
    
    protected function getData(Request $request)
    {
        $rules = [
            'card_holder_id' => 'required|string|min:1|exists:cards_holders,card_holder_id',
            'card_id' => 'required|string|min:1|exists:cards,card_id',
        ];
        $messages =[
            'card_id.required' => 'Please Enter valid card',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }

}
