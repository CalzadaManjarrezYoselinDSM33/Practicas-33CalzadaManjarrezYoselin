<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validar extends FormRequest
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
            'matricula' => 'required',
            'nombreu' => 'required',
            'app' => 'required',
            'apm' => 'required',
            'fech_nac' => 'required',
            'genero' => 'required',
            'email' => 'required',
            'pass' => 'required',
            'nivel' => 'required',
            'activo' => '1'
            //
        ];
    }
}
