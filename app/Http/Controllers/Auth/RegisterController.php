<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'userName' => ['required', 'string', 'min:3', 'max:15'],
            'name' => ['required', 'string', 'alpha', 'min:2', 'max:15'],
            'surname' => ['required', 'string', 'alpha', 'min:2', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'userImage' => ['Image'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();
        $file = $request->file('userImage');
        if(empty($file)){
            echo 'if';
            $userImageUrl = "public/images/predefined.png";
            $userImage = "predefined.png";
        }
        else{
            echo 'else';
            $nombre = $file->getClientOriginalName();
            $userImage = $nombre;
            $uploadPath = 'public/images/';
            $userImageUrl = $uploadPath . $userImage;
            $succes = $file->move($uploadPath, $userImage);
        }
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'userName' => $data['userName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'userImage' => $userImageUrl,
        ]);
    }
}
