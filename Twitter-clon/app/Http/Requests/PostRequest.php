<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text' => 'required|min:3|max:50',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для ввода',
            'numeric|min' => 'Поле :attribute должно иметь не меньше :min',
            'min' => 'Поле :attribute должно иметь минимум :min символов',
            'max' => 'Поле :attribute должно иметь максимум :max символов',
            'unique' => 'Название уже изпользуюьтся',
        ];
    }
}