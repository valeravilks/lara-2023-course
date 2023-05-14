<?php

namespace App\Http\Requests\Posts;

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
            'title' => 'required|min:4|max:10',
            'content' => 'required|min:10|max:30'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Заголовок',
            'content' => 'Содержимое',
        ];
    }
}
