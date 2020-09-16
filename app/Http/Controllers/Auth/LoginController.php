<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function findByUserName(Request $request){
        $userName =$request->input('userName');
        $password = $request->input('password');
        $condition = ['userName' => $userName, 'password'=> $password];
        $user = User::where($condition)->first();

        $announcement =  new \App\Announcement();
        $announcement = $announcement->orderBy('PublishedTime', 'DESC')->where('Disponibility', True);
        $announcement = $announcement->paginate(3)->appends([
            'OrderBy' => request('OrderBy'),
        ]);
        //$announcement->withPath('/ingresado?userName=jerry.effertz&password=A%2F%7B%2FWH%25Aw"%3FC%40m&submit=Entrar');

        if(empty($user)){
            return view('auth.login')->with('notLogged', 'error');
            }

        return view('home', compact('announcement'))->with('user', $user->userName);
    }
}
