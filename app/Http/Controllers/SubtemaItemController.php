<?php

namespace App\Http\Controllers;

use App\Models\Subtema;
use Illuminate\Http\Request;

class SubtemaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('subtemas.items.index');
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
      dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subtema  $subtema
     * @return \Illuminate\Http\Response
     */
    public function show(Subtema $subtema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subtema  $subtema
     * @return \Illuminate\Http\Response
     */
    public function edit(Subtema $subtema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subtema  $subtema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subtema $subtema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subtema  $subtema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subtema $subtema)
    {
        //
    }
}
