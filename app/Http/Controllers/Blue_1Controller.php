<?php

namespace App\Http\Controllers;

use App\Models\Blue_1;
use Illuminate\Http\Request;

class Blue_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blue_1 = Blue_1::get();
        return view('index', compact('blue_1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blue_1  $blue_1
     * @return \Illuminate\Http\Response
     */
    public function show(Blue_1 $blue_1)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blue_1  $blue_1
     * @return \Illuminate\Http\Response
     */
    public function edit(Blue_1 $blue_1)
    {
        return view('form', compact('blue_1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blue_1  $blue_1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blue_1 $blue_1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blue_1  $blue_1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blue_1 $blue_1)
    {
        //
    }
}
