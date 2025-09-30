<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request)
    {
        $id = $request->route('id');
        $hash = $request->route('hash');

        $data = array_merge($request->all(),compact('id','hash'));

        $validator = Validator::make($data, [
            'id' => 'required|exists:users,id',
            'hash' => 'required|string',
        ], [], [
            'id' => $request->route('id'),
            'hash' => $request->route('hash'),
        ]); //->validate();

        if ($validator->fails()) {
            dd($validator->errors()); // Показать ошибки, если валидатор не прошел
        }
        dd('No errors');

        $user = User::findOrFail($request->input('id'));

        if (! hash_equals(sha1($user->getEmailForVerification()), $request->input('hash'))) {
            throw ValidationException::withMessages([
                'hash' => __('The provided email verification link is invalid.')
            ]);
        }

        if ($user->hasVerifiedEmail()) {
            return redirect(Route::currentRouteName());
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        Auth::logoutOtherDevices($user->password);

        return redirect(Route::currentRouteName())->with('status', 'email.verification-successful');
    }
}
