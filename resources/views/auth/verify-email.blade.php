@extends('layouts.guest')

@section('content')
    <div class="mb-4 text-sm text-gray-600">
        Спасибо за регистрацию! Перед началом работы подтвердите, пожалуйста, свою электронную почту, перейдя по ссылке, которую мы отправили Вам на указанный Вами адрес электронной почты.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            Отправлена новая ссылка для подтверждения на ваш электронный адрес.
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf

            <div>
                <x-primary-button>
                    Повторно отправить письмо с подтверждением
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Выйти
            </button>
        </form>
    </div>
@endsection
