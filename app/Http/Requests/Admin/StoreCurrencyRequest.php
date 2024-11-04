<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurrencyRequest extends FormRequest
{
    // Константы для сообщений об ошибках
    const NAME_REQUIRED = 'Поле "Название новой валюты" обязательно должно быть заполнено.';
    const NAME_MIN = 'Минимальная длина названия новой валюты составляет 2 символа.';
    const NAME_MAX = 'Максимальная длина названия новой валюты составляет 30 символов.';
    
    const CHARCODE_REQUIRED = 'Поле "Символьное обозначение" обязательно должно быть заполнено.';
    const CHARCODE_LENGTH = 'Символьное обозначение должно состоять из 3 символов.';
    
    const INTERNAL_RATE_REQUIRED = 'Поле "Внутренний курс" обязательно должно быть заполнено.';
    const INTERNAL_RATE_NUMERIC = 'Значение "Внутренний курс" должно быть числом';
    const INTERNAL_RATE_MIN = 'Минимальное значение внутреннего курса составляет 0.01.';
    
    const AUTO_MULTIPLIER_REQUIRED = 'Поле "Множитель для расчета внутреннего курса" должно быть заполнено.';
    const AUTO_MULTIPLIER_NUMERIC = 'Значение "Множитель для расчета внутреннего курса" должно быть числом';
    const AUTO_MULTIPLIER_MIN = 'Минимальное значение множителя составляет 0.95.';
    const AUTO_MULTIPLIER_MAX = 'Максимальное значение множителя составляет 1.5.';

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
            'name'          => 'required|min:2|max:30',
            'charcode'      => 'required|min:3|max:3',
            'internal_rate' => 'required|numeric|min:0.01',
            'auto_multiplier' => 'required|numeric|min:0.95|max:1.5',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => self::NAME_REQUIRED,
            'name.min' => self::NAME_MIN,
            'name.max' => self::NAME_MAX,
            
            'charcode.required' => self::CHARCODE_REQUIRED,
            'charcode.min' => self::CHARCODE_LENGTH,
            'charcode.max' => self::CHARCODE_LENGTH,
            
            'internal_rate.required' => self::INTERNAL_RATE_REQUIRED,
            'internal_rate.numeric' => self::INTERNAL_RATE_NUMERIC,
            'internal_rate.min' => self::INTERNAL_RATE_MIN,
            
            'auto_multiplier.required' => self::AUTO_MULTIPLIER_REQUIRED,
            'auto_multiplier.numeric' => self::AUTO_MULTIPLIER_NUMERIC,
            'auto_multiplier.min' => self::AUTO_MULTIPLIER_MIN,
            'auto_multiplier.max' => self::AUTO_MULTIPLIER_MAX,
        ];
    }

    // Метод для подготовки данных перед валидацией
    protected function prepareForValidation()
    {
        // Преобразуем запятые в точках в полях internal_rate и auto_multiplier
        $this->merge([
            'internal_rate' => str_replace(',', '.', $this->request->get('internal_rate')),
            'auto_multiplier' => str_replace(',', '.', $this->request->get('auto_multiplier'))
        ]);
    }
}