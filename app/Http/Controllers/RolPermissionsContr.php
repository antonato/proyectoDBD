<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolPermissionsContr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolPermissions = \App\RolPermissions::all();
        return response()->json($rolPermissions);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rolPermissions = new \App\RolPermissions();
        $rolPermissions->idrol = $request->idrol;
        $rolPermissions->idperm = $request->idperm;
        $rolPermissions->save();
        return response()->json([
            "message" => "record created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rolPermissions = \App\RolPermissions::find($id);
        return response()->json($rolPermissions);
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
    public function update(Request $request, $id)
    {
        $rolPermissions = \App\RolPermissions::findOrFail($id);
        $rolPermissions->update($request->all());
        $rolPermissions->save();

        return response()->json($rolPermissions);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rolPermissions =  \App\RolPermissions::find($id);
        $rolPermissions->delete();
        return "rolPermission deleted";
    }
}
