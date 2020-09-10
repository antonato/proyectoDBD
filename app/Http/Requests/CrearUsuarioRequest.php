<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearUsuarioRequest extends FormRequest
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
            //Usuario
            'userName' => 'required|string|max:8|unique:users',
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:20',
            'password' => 'required|string|max:15',
            'email' => 'required|email|string|max:30|unique:users',

        ];
    }
}
