<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_cards;
use App\Models\cards_holder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use Exception;

class CardsHoldersController extends Controller
{
    /**
     * Display a listing of the cards holders.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new cards holder.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
    }

    /**
     * Store a new cards holder in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        try {
            $data = $this->getData($request);
            if ($data->fails()) {
                return response()->json([
                  'status' => 'error', 'error' => $data->errors(), 'Appium-status-code' => 401, ], 200);
            }

            $data = $request->all();
            $data['user_id'] = $user->id;
            $test_if_exist = cards_holder::where('name', $data['name'])
                        ->where('user_id', $user->id)->get();
            if (count($test_if_exist) > 0) {
                return response()->json([
                    'data' => $test_if_exist[0],
                    'status' => 'error',
                    'error-data' => 'Sorry card holder already exist',
                    'Appium-status-code' => 401,
                    ], 200);
            }
            $createdHolderCard = cards_holder::create($data);
            recent_activity::create(array('user_id' => $user->id, 'action_by_user_id' => 0,
                    'description' => 'createCardHolder', 'profile_image_url' => null, ));
            DB::commit();

            return response()->json([
                    'data' => $createdHolderCard,
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
     * Display the specified cards holder.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show(Request $request)
    {
        $user = Auth::user();
        $cardHolder_obj = new cards_holder();
        $cardHolderDetails = $cardHolder_obj->ShowCardHolder($request, $user);

        return response()->json(['status' => 'success', 'data' => $cardHolderDetails, 'status-code' => 200], 200);
    }

    // showAll
    public function showAll(Request $request)
    {
        $user = Auth::user();
        $cardHolder_obj = new cards_holder();
        $cardHolderDetails = $cardHolder_obj->ShowCardHolder($request, $user);

        return response()->json(['status' => 'success', 'data' => $cardHolderDetails, 'status-code' => 200], 200);
    }

    /**
     * Show the form for editing the specified cards holder.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified cards holder in the storage.
     *
     * @param int                     $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $this->getData($request);
            if ($data->fails()) {
                return response()->json([
                'status' => 'error', 'error' => $data->errors(), 'Appium-status-code' => 401, ], 200);
            }

            $cardsHolder = cards_holder::where('card_holder_id', $id)->get();
            if (count($cardsHolder) == 0) {
                return response()->json([
                    'status' => 'error',
                    'error' => 'Sorry card holder not exist',
                    'Appium-status-code' => 401,
                    ], 200);
            }
            $cardsHolder[0]->update($request->all());
            recent_activity::create(array('user_id' => $user->id, 'action_by_user_id' => 0,
                    'description' => 'updateCardHolder', 'profile_image_url' => null, ));
            DB::commit();

            return response()->json(['status' => 'success', 'status-code' => 200], 200);
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
     * Remove the specified cards holder from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy(Request $request)
    {
        $user = Auth::user();
        try {
            DB::beginTransaction();
            $cardHolder_obj = new cards_holder();
            $cardHolder_obj->deleteCardHolder($request, $user);
            DB::commit();

            return response()->json(['status' => 'success', 'status-code' => 200], 200);
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
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     *
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:1',
        ];
        $messages = [
            'name.required' => 'Please Enter valid name',
        ];
        $data = Validator::make($request->all(), $rules, $messages);

        return $data;
    }

    public function showCardHoldersList(Request $request)
    {
        $user = Auth::user();
        try {
//            dd($user->id); 35
            $objCardHolder = new cards_holder();
            $data = $objCardHolder->getUserCardHolders($user->id, $user->type);

            return response()->json(['data' => $data, 'status' => 'success', 'status-code' => 200], 200);
        } catch (Exception $exception) {
            return response()->json(['status' => 'error', 'data' => $exception->getMessage(), 'getTraceAsString' => $exception->getTraceAsString(), 'special-data' => $exception->getLine().' '.$exception->getFile(), 'status-code' => 403], 200);
        }
    }

    //showCardsOfHoldersList

    public function showCardsOfHoldersList(Request $request)
    {
        $user = Auth::user();
        try {
//            dd($user->id); 35

//            $objCardHolder = new cards_holder();
            $objUserCardHolder = new user_cards();
            $data = $objUserCardHolder->getCardsOfHolder($request, $user->id);

            return response()->json([
                    'data' => $data,
                    'status' => 'success', 'status-code' => 200,
                ], 200);
        } catch (Exception $exception) {
            return response()->json([
                        'status' => 'error',
                        'data' => $exception->getMessage(), 'getTraceAsString' => $exception->getTraceAsString(),
                  'special-data' => $exception->getLine().' '.$exception->getFile(), 'status-code' => 403,
                    ], 200);
        }
    }
}
