<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index($id){
      $tema = Tema::find($id);
      return view('page.index',compact('tema'));
    }

   }
