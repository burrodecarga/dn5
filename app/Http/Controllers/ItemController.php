<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Image;
use App\Models\Item;
use App\Models\Subtema;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $temas = Tema::paginate(1);
       return view('items.index', compact('temas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $subtema_id = $request->id;
       $subtema = Subtema::find($subtema_id);
       $iconos = Icon::all();
       $item = new Item(['subtema_id'=>$subtema_id]);
       return view('items.create', compact('item', 'iconos','subtema_id','subtema'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all(),'xx');
        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'icon' => 'required',
            'posicion'=>'integer',
            'subtema_id'=>'required'
        ]);

        if ($request->publicado == "on") {
            $publicado = 1;
        } else {
            $publicado = 0;
        }
        $request->merge(['autor' => auth()->user()->name]);
        $request->merge(['publicado' => 1]);
        $request->merge(['actualizado' => date(now())]);

        $item = Item::create([
         'titulo' =>$request->titulo,
         'descripcion'=>$request->descripcion,
         'posicion' =>$request->posicion,
         'publicado' =>$publicado,
          'autor' =>$request->autor,
          'actualizado' =>$request->actualizado,
          'icon' =>$request->icon,
          'subtema_id' =>$request->subtema_id,

        ]);



        if($request->hasFile("images")){
           $files=$request->file("images");
           //dd($files,$request->all());
           foreach($files as $imagen){
            $url = $imagen->store('public/img');
            $foto = Image::create([
                'url' =>$url,
                'item_id' =>$item->id,
            ]);
            $foto->save();
           }
        }
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $iconos = Icon::all();
        return view('items.edit',compact('item','iconos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'icon' => 'required',
            'posicion'=>'integer',
            'subtema_id'=>'required'
        ]);

        if ($request->publicado == "on") {
            $publicado = 1;
        } else {
            $publicado = 0;
        }

        $item->update([
            'titulo' =>$request->titulo,
            'descripcion'=>$request->descripcion,
            'posicion' =>$request->posicion,
            'publicado' =>$publicado,
             'autor' =>$request->autor,
             'actualizado' =>$request->actualizado,
             'icon' =>$request->icon,
             'subtema_id' =>$request->subtema_id,
           ]);

           $item->save();
           return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }

    public function borrar($id){
        $img = Image::find($id);
        if ($img->url !== 'public/pic2.jpg' &&  $img->url !== 'public/pic1.jpg'){
            Storage::delete($img->url);
        }
        $img->delete();
        return redirect()->route('items.index');
    }
}
