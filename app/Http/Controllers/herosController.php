<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\heros;

class herosController extends Controller
{
   public function index(){
    $page_title = "Super Heros";
    // select * from superheros
    $heros = heros::all();
    //select * from heros where
    $men = heros::where('Gender','=','Male')->get();
    return view('heros',compact('page_title','heros','men'));
   }
}
