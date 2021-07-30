<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Tema;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TemaController extends Controller
{



    public function index()
    {

        $temas = Tema::paginate(3);
        return view('temas.index', compact('temas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $iconos = Icon::all();
        $tema = new Tema();
        return view('temas.create', compact('tema', 'iconos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'icon' => 'required',
            'imagen' => 'file|max:2048',
            'posicion' => 'integer'
        ]);



       if($request->has('publico')){
           $publico = 1;
       }else{$publico = 0;}

        $request->merge(['autor' => auth()->user()->name]);
        $request->merge(['publicado' => $publico]);
        $request->merge(['imagen' => 'public/pic2.jpg']);
        $request->merge(['actualizado' => date(now())]);
        $tema = Tema::create($request->all());
        $tema->save();

        if ($request->hasFile("imagen")) {
            $imagen = $request->file("imagen")->store('public/img');
            $tema->imagen = $imagen;
            $tema->save();
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
    public function edit(Tema $tema)
    {
        $iconos = Icon::all();
        return view('temas.edit', compact('tema', 'iconos'));
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
        $aBorrar = $tema->imagen;

        $validated = $request->validate([

            'titulo' => 'required',
            'descripcion' => 'required',
            'icon' => 'required',
            'imagen' => 'file|max:2048',
        ]);


        if ($request->publicado == "on") {
            $publicado = 1;
        } else {
            $publicado = 0;
        }
        $request->merge(['publicado' => $publicado]);
        $request->merge(['posicion' => $request->posicion]);
        $request->merge(['actualizado' => date(now())]);

        $tema->update($request->all());
        if ($request->hasFile("imagen")) {

            if ($aBorrar !== 'public/pic2.jpg') {
                Storage::delete($aBorrar);
            }
            $imagen = $request->file("imagen")->store('public/img');
            $tema->imagen = $imagen;
        }
        $tema->save();
        return redirect()->route('temas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {
        $aBorrar = $tema->imagen;
        if ($aBorrar !== 'public/pic2.jpg') {
            Storage::delete($aBorrar);
        }
        $tema->delete();
        return redirect()->route('temas.index');
    }
}
