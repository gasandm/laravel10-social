<?php

namespace App\Http\Requests\Branch;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'parent_id' => 'required|integer|exists:branches,id',
            'section_id' => 'required|integer|exists:sections,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле заголовок необходимо для заполнения',
            'section_id.required' => 'Выберите раздел'
        ];
    }
}
