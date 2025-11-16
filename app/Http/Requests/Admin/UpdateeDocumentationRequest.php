<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocumentationRequest extends FormRequest
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
            'title'       => 'required|min:2|max:50',
            'text'       => 'required|min:2|max:200',
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
            'title.required'      => 'Название документа обязательно для заполнения.',
            'title.min'           => 'Минимальная длина поля "Название документа" составляет 2 символа.',
            'title.max'           => 'Максимальная длина поля "Название документа" составляет 50 символов.',

            'text.required'      => 'Описание документа обязательно для заполнения.',
            'text.min'           => 'Минимальная длина поля "Описание документа" составляет 2 символа.',
            'text.max'           => 'Максимальная длина поля "Описание документа" составляет 200 символов.',
        ];
    }
}
