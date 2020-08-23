<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCommentContr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productComment = \App\ProductComment::all();
        return response()->json($productComment);
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
        $productComment = new \App\ProductComment();
        $productComment->content = $request->content;
        $productComment->qualification = $request->qualification;
        $productComment->publishedTime = $request->publishedTime;
        $productComment->save();
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
        $productComment = \App\ProductComment::find($id);
        return response()->json($productComment);
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
        $productComment = \App\ProductComment::findOrFail($id);
        $productComment->update($request->all());
        $productComment->save();

        return response()->json($productComment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productComment =  \App\ProductComment::find($id);
        $productComment->delete();
        return "prodcut comment deleted";
    }
}
