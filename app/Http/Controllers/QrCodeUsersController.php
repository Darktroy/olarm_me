<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use App\Models\qr_code_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;

use QrCode;

class QrCodeUsersController extends Controller
{
    /**
     * Display a listing of the qr code users.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $qrCodeUsers = qr_code_user::with('qrcodeuser', 'user', 'card')->paginate(25);

        return view('qr_code_users.index', compact('qrCodeUsers'));
    }

    /**
     * Show the form for creating a new qr code user.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $qrCodeUsers = QrCodeUser::pluck('id', 'qr_code_user_id')->all();
        $users = User::pluck('id', 'id')->all();
        $cards = Card::pluck('id', 'id')->all();

        return view('qr_code_users.create', compact('qrCodeUsers', 'users', 'cards'));
    }

    /**
     * Store a new qr code user in the storage.
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
            $qr_obj = new qr_code_user();
            $data = $qr_obj->geberateQR($request, $user);
            DB::commit();
            // ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** **
            return response()->json([
                'data' =>  $data,
                'message' =>  'Success',
                'status' => 'success', 'status-code' => 200, 'code' => 200
            ], 200);
            // ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** **
            // $qrcode = new BaconQrCodeGenerator();
            // return $qrcode->size(250)->generate($data);
        } catch (Exception $exception) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'data' => $exception->getMessage(),
                'special-data' => $exception->getLine() . ' ' . $exception->getFile(), 'status-code' => 403, 'code' => 100,
            ], 200);
        }
    }

    /**
     * Display the specified qr code user.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $qrCodeUser = qr_code_user::with('qrcodeuser', 'user', 'card')->findOrFail($id);

        return view('qr_code_users.show', compact('qrCodeUser'));
    }

    /**
     * Show the form for editing the specified qr code user.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $qrCodeUser = qr_code_user::findOrFail($id);
        $qrCodeUsers = QrCodeUser::pluck('id', 'qr_code_user_id')->all();
        $users = User::pluck('id', 'id')->all();
        $cards = Card::pluck('id', 'id')->all();

        return view('qr_code_users.edit', compact('qrCodeUser', 'qrCodeUsers', 'users', 'cards'));
    }

    /**
     * Update the specified qr code user in the storage.
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

            $qrCodeUser = qr_code_user::findOrFail($id);
            $qrCodeUser->update($data);

            return redirect()->route('qr_code_users.qr_code_user.index')
                ->with('success_message', 'Qr Code User was successfully updated.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified qr code user from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $qrCodeUser = qr_code_user::findOrFail($id);
            $qrCodeUser->delete();

            return redirect()->route('qr_code_users.qr_code_user.index')
                ->with('success_message', 'Qr Code User was successfully deleted.');
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
            'qr_code_user_id' => 'required|nullable',
            'user_id' => 'nullable',
            'card_id' => 'nullable',
            'code' => 'nullable',
            'begain_at' => 'date_format:j/n/Y g:i A|nullable',
            'ended_at' => 'date_format:j/n/Y g:i A|nullable',
        ];

        $data = $request->validate($rules);

        return $data;
    }
}
