<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubtemaController;
use App\Http\Controllers\SubtemaItemController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TemaSubtemaController;
use App\Models\Tema;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    $temas = Tema::all();
    return view('home',compact('temas'));
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->resource('/temas',TemaController::class );



Route::middleware(['auth:sanctum', 'verified'])->get('/main',[MainController::class,'index'])->name('main.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/pagina/{pagina}',[PageController::class,'index'])->name('pagina.index');

Route::middleware(['auth:sanctum', 'verified'])
->resource('/items',ItemController::class);

Route::middleware(['auth:sanctum', 'verified'])
->post('/items/borra-imagen/{imagen}',[ItemController::class,'borrar'])
->name('items.borrar-imagen');

Route::middleware(['auth:sanctum', 'verified'])
->resource('/subtemas',SubtemaController::class);

Route::middleware(['auth:sanctum', 'verified'])
->resource('/temas.subtemas',TemaSubtemaController::class);

Route::middleware(['auth:sanctum', 'verified'])
->get('/temas.subtemas/nuevo-subtema',[TemaSubtemaController::class,'nuevoSubtema'])
->name('nuevo-subtema');

Route::middleware(['auth:sanctum', 'verified'])->resource('/subtemas.items',SubtemaItemController::class);












