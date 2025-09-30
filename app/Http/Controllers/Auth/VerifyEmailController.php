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

        Validator::make($data, [
            'id' => 'required|exists:users,id',
            'hash' => 'required|string',
        ])->validate();

        $user = User::findOrFail($request->route('id'));


        if (! hash_equals(sha1($user->getEmailForVerification()), $request->route('hash'))) {
            throw ValidationException::withMessages([
                'hash' => __('The provided email verification link is invalid.')
            ]);
        }


        if ($user->hasVerifiedEmail()) {
            toastr()
                ->warning('Ваша учетная запись уже подтверждена ранее!');
            return redirect()->route('home');
        }
        else {
            $user->markEmailAsVerified();
            toastr()
                ->title('Успех')
                ->success('Ваша учетная запись подтверждена, теперь Вы можете войти');
            session()->flash('form_error_source', 'authentication');
            return redirect()->route('home');
        }
    }
}
