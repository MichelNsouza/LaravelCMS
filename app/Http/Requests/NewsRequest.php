<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'text' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo titulo é obrigatorio',
            'title.min' => 'Digite ao menos 3 caracteres em titulo',
            'subtitle' => 'required|3min:3',
            'subtitle.required' => 'O campo subtitle é obrigatorio',
            'subtitle.min' => 'Digite ao menos 3 caracteres em subtitle',
            'text.required' => 'O campo texto é obrigatorio',
            'text.min' => 'Digite ao menos 5 caracteres em texto'
        ];
    }
}
