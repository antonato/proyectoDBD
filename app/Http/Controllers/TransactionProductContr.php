<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionProductContr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactionProduct = \App\TransactionProduct::all();
        return response()->json($transactionProduct);
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
        $transactionProduct = new \App\TransactionProduct();
        $transactionProduct->idProduct = $request->idProduct;
        $transactionProduct->idAnnouncement = $request->idAnnouncement;
        $transactionProduct->save();
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
        $transactionProduct = \App\Permissions::find($id);
        return response()->json($transactionProduct);
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
        $transactionProduct = \App\TransactionProduct::findOrFail($id);
        $transactionProduct->update($request->all());
        $transactionProduct->save();

        return response()->json($transactionProduct);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TransactionProduct =  \App\transactionProduct::find($id);
        $TransactionProduct->delete();
        return "rolPermission deleted";
    }
}
