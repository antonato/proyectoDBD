<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentMethodContr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentMethod = \App\PaymentMethod::all();
        return response()->json($paymentMethod);
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
        $paymentMethod = new \App\PaymentMethod();
        $paymentMethod->cardType = $request->cardType;
        $paymentMethod->cardNumber = $request->cardNumber;
        $paymentMethod->createAt = $request->createAt;
        $paymentMethod->save();
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
        $paymentMethod = \App\PaymentMethod::find($id);
        return response()->json($paymentMethod);
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
        $paymentMethod = \App\PaymentMethod::findOrFail($id);
        $paymentMethod->update($request->all());
        $paymentMethod->save();

        return response()->json($paymentMethod);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paymentMethod =  \App\PaymentMethod::find($id);
        $paymentMethod->delete();
        return "payment method deleted";
    }
}
