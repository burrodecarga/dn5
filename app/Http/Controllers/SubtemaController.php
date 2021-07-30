<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Subtema;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubtemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temas = Tema::orderBy('posicion','asc')->get();
        return view('subtemas.index',compact('temas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iconos = Icon::all();
        $subtema = new Subtema();
        $temas = Tema::all();
       return view('subtemas.create', compact('temas','subtema','iconos'));
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

        return redirect()->route('subtemas.index');

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
        $iconos = Icon::all();
        $temas = Tema::all();
        $tema = $subtema->tema;
        return view('subtemas.edit', compact('tema','temas','subtema', 'iconos'));
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
        $aBorrar = $subtema->imagen;

            $validated = $request->validate([
                'titulo' => 'required',
                'descripcion' => 'required',
                'icon' => 'required',
                'imagen' => 'file|max:2048',

            ]);

            //dd($request->publico);
            if ($request->publicado == "on") {
                $publicado = 1;
            } else {
                $publicado = 0;
            }
            $request->merge(['publicado' => $publicado]);
            $request->merge(['posicion' => $request->posicion]);
            $request->merge(['actualizado' => date(now())]);

            $subtema->update($request->all());
            if ($request->hasFile("imagen")) {

                if ($aBorrar !== 'public/pic2.jpg') {
                    Storage::delete($aBorrar);
                }
                $imagen = $request->file("imagen")->store('public/img');
                $subtema->imagen = $imagen;
            }
            $subtema->save();
            return redirect()->route('subtemas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subtema  $subtema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subtema $subtema)
    {
       
        $aBorrar = $subtema->imagen;
        if ($aBorrar !== 'public/pic2.jpg') {
            Storage::delete($aBorrar);
        }
        $subtema->delete();
        return redirect()->route('subtemas.index');
    }


}
