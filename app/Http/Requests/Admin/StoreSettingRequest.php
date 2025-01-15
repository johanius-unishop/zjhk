<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
{
    // Константы для сообщений об ошибках
    const GROUP_REQUIRED = 'Поле "Группа" обязательно должно быть заполнено.';
    const KEY_REQUIRED = 'Поле "Настройка" обязательно должно быть заполнено.';
    const VALUE_REQUIRED = 'Поле "Значение" должно быть заполнено.';

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
     * @return array<string, string|\Illuminate\Contracts\Validation\ValidationRule|array<mixed>>
     */
    public function rules(): array
    {
        return [
            'group'         => 'required',
            'key'           => 'required',
            'value'         => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'group.required' => self::GROUP_REQUIRED,
            'key.required' => self::KEY_REQUIRED,
            'value.required' => self::VALUE_REQUIRED,
        ];
    }
}