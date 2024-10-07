<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use App\Models\Admin;
class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'patronymic' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', "regex:/^(\+7|7|8)?[\s\-]?\(?\d{3}\)?[\s\-]?\d{1}[\s\-]?\d{3}[\s\-]?\d{2}[\s\-]?\d{2}$/"],
            'email' => ['required', 'email' , Rule::unique(Admin::class) ],
            'password' => ['required', Password::min(6), 'confirmed']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Вы забыли заполнить имя.',
            'patronymic.required' => 'Вы забыли заполнить отчество.',
            'last_name.required' => 'Вы забыли заполнить фамилию',
            'phone_number.required' => 'Проверьте правильность номера телефона.',
            'email.required' => 'Вы забыли указать email.',
            'password.required' => 'Вы забыли указать пароль.',
            'password.min' => 'Пароль должен быть 6 и более символов.',
        ];
    }
}
