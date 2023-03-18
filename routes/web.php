<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\herosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/example',function(){
    $page_title = "Example View";
    return view('exampleview', compact('page_title'));
})->name('example');

Route::get('/heros',function(){
    $page_title = "Super Heros";
    return view('exampleview', compact('page_title'));
})->name('heros');

Route::get('/heros',[herosController::class,"index"])->name('index');
Route::get('/heros',[allherosController::class,"indexall"])->name('indexall');
Route::get('/heros',[fherosController::class,"indexf"])->name('indexf');

