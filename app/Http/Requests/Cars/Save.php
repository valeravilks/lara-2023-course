<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;

class Save extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'brand' => 'required|min:1|max:15',
            'model' => 'required|min:1|max:15',
            'price' => 'required|integer|multiple_of:1000',
        ];
    }

    public function attributes(): array
    {
        return [
            'brand' => 'Бренд',
            'model' => 'Модель',
            'price' => 'Цена',
        ];
    }
}
