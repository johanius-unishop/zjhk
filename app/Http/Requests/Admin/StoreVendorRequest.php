<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendorRequest extends FormRequest
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
            'name'       => 'required|min:2|max:120',
            'short_name'       => 'required|min:2|max:10',
            'warranty'       => 'required|min:2|max:10',
        ];
    }

    /**
     * Customize error messages for each rule.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required'      => 'Название поставщика обязательно для заполнения.',
            'name.min'           => 'Минимальная длина поля "Название" составляет 2 символа.',
            'name.max'           => 'Максимальная длина поля "Название" составляет 120 символов.',

            'short_name.required' => 'Краткое наименование обязательно для заполнения.',
            'short_name.min'      => 'Минимальная длина поля "Краткое наименование" составляет 2 символа.',
            'short_name.max'     => 'Максимальная длина поля "Краткое наименование" составляет 10 символов.',

            'warranty.required'   => 'Срок гарантии обязателен для заполнения.',
            'warranty.min'        => 'Минимальная длина поля "Срок гарантии" составляет 2 символа.',
            'warranty.max'       => 'Максимальная длина поля "Срок гарантии" составляет 10 символов.',
        ];
    }
}
