<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidaSerieRequest extends FormRequest
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
            'nome' => 'required|min:2'
        ];
    }

    public function messages()
    {
      return [
        'nome.required' => 'O campo :attribute deve ser preenchido.',
        'nome.min' => 'O campo :attribute deve ter no mínimo 2 caracteres.'
      ];
    }
}
