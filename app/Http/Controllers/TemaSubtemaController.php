<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Subtema;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaSubtemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tema $tema)
    {
        $iconos = Icon::all();
        $subtema = new Subtema();
        return view('temas.subtemas.create',compact('tema','iconos','subtema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'icon' => 'required',
            'imagen' =>'file|max:2048',
            'posicion'=>'integer',
            'tema_id' => 'required'
        ]);

        if ($request->publicado == "on") {
            $publicado = 1;
        } else {
            $publicado = 0;
        }

        $request->merge(['autor' => auth()->user()->name]);
        $request->merge(['publicado' => 1]);
        $request->merge(['actualizado' => date(now())]);

        $subtema = Subtema::create($request->all());
        $subtema->save();

        if($request->hasFile("imagen")){

            $imagen = $request->file("imagen")->store('public/img');
            $subtema->imagen = $imagen;
            $subtema->save();
        }
        return redirect()->route('temas.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema, Subtema $subtema)
    {
        $iconos = Icon::all();
        $temas = Tema::all();
        return view('subtemas.edit', compact('temas','tema','subtema', 'iconos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema, Subtema $subtema)
    {

    }

    public function nuevoSubtema(Request $request){
        $tema = Tema::find($request->idTema);
        $iconos = Icon::all();
        $subtema = new Subtema();
        return view('temas.subtemas.create',compact('tema','iconos','subtema'));
    }
}
