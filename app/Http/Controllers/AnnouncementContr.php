<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementContr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcement = \App\Announcement::all();
        return response()->json($announcement);
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
        $announcement = new \App\Announcement();
        $user = new \App\User();
        
        $announcement->NameProduct = $request->NameProduct;
        $announcement->price = $request->price;
        $announcement->Description = $request->Description;
        $announcement->QualificationAverage = $request->QualificationAverage;
        $announcement->Disponibility = $request->Disponibility;
        $announcement->ImageFormat = $request->ImageFormat;
        $announcement->PublishedTime = $request->PublishedTime;
        $announcement->Category = $request->Category;
        $announcement->save();
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
        $announcement = \App\Announcement::find($id);
        return response()->json($announcement);
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
        $announcement = \App\Announcement::findOrFail($id);
        $announcement->update($request->all());
        $announcement->save();

        return response()->json($announcement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement =  \App\Announcement::find($id);
        $announcement->delete();
        return "announcement deleted";
    }
}
