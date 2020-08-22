<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionsContr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = \App\Permissions::all();
        return response()->json($permissions);
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
        $permissions = new \App\Permissions();
        $permissions->create = $request->create;
        $permissions->read = $request->read;
        $permissions->update = $request->update;
        $permissions->delete = $request->delete;
        $permissions->save();
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
        $permissions = \App\Permissions::find($id);
        return response()->json($permissions);
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
        // $permissions = \App\Permissions::findOrFail($id);

        // if ($request->get('var1') != NULL){
        //     $permissions->create = $request->get('var1');
        // }
        // if ($request->get('var2') != NULL){
        //     $permissions->read = $request->get('var2');;
        // }
        // if ($request->get('var3') != NULL){
        //     $permissions->update = $request->get('var3');;
        // }
        // if ($request->get('var4') != NULL){
        //     $permissions->delete = $request->get('var4');;
        // }
        // $permissions->save();
    
        // return response()->json($permissions);

        $permissions = \App\Permissions::findOrFail($id);
        $permissions->update($request->all());
        $permissions->save();

        return response()->json($permissions);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permissions =  \App\Permissions::find($id);
        $permissions->delete();
        return "permission deleted";
    }
}
