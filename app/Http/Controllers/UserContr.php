<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Providers\RouteServiceProvider;
use App\Http\Requests\CrearUsuarioRequest;
use App\Http\Requests\EditarUsuarioRequest;
use App\Http\Controllers\AnnouncementContr;

//use Illuminate\Support\Facades\Auth;

use Auth;

class UserContr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\User::all();
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    public function store(CrearUsuarioRequest $request)
    {
        
        $user = new \App\User();
        $user->userName = $request->userName;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = $request->password;
        
        $file = $request->file('userImage');
        if(empty($file)){
            $file = "public/images/predefined.png";
            $user->userImage = "predefined.jpg";
        }
        else{
            $nombre = $file->getClientOriginalName();
            $user->userImage = $nombre;
            $file->move('images', $nombre);
            $user->save();
        }
        $announcement =  new \App\Announcement();
        $announcement = $announcement->orderBy('PublishedTime', 'DESC')->where('Disponibility', True);

        return view('home', compact('announcement'))->with('status', 'Success!')->with('user', $user->userName);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\User::find($id);
        $username = $user->username;
        //return response()->json($user);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public static function findbyname(Request $request)
    {
        //$userName = $request->userName;
        $userName = \App\User::userName->get();
        $password = $request->password;
        $user = \App\User::where('userName', $userName)->first();
        $password = \App\User::where('password', $password)->first();

        $userNameIn =$request->input('userName');
        $passwordIn = $request->input('password');

        $condition = [$userName,$userNameIn];

        if ($userName == $userNameIn && $password == $passwordIn){
            return $condition;
        }
        return view('auth.register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarUsuarioRequest $request, $id)
    {
        $user = \App\User::findOrFail($id);
        $user->update($request->all());
        $user->save();

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =  \App\User::find($id);
        $user->delete();
        return "user deleted";
    }

    public function getUserByEmail(Request $request){
        $email =$request->input('email');
        $password = $request->input('password');
        $condition = ['email' => $email, 'password'=> $password];
        $user =  \App\User::where($condition)->first();

       if (Auth::attempt(['email' => $email, 'password' => $password])) {
            //return redirect()->route('announcement');
            return 'logeado';
       }
       return 'error';
       //return redirect()->route('announcement');
        // The user is active, not suspended, and exists.

    }
}
