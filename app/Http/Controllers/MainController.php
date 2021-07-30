<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $temas = Tema::paginate(1);
        return view('main.index', compact('temas'));
    }
}
