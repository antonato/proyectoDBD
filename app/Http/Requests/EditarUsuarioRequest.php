<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarUsuarioRequest extends FormRequest
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
            'Username' => 'required|string|max:8',
            'Name' => 'required|string|max:30',
            'Surname' => 'required|string|max:20',
            'Password' => 'required|string|max:15',
            'Email' => 'required|string|max:30',
        ];
    }
}
