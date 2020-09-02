<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller{

    public function login()
    {
        $this->validate(request(), [
            'userName' => 'userName|required|string',
            'password' => 'required|string'
        ]); 
    }
}


