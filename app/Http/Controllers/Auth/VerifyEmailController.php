<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request)
    {
        Validator::make($request->all(), [
            'id' => 'required|exists:users,id',
            'hash' => 'required|string'
        ])->validate();

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
