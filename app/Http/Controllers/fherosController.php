<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\fheros;

class fherosController extends Controller
{
   public function indexf(){
    $page_title = "Super Heros";
    // select * from superheros
    $heros = heros::all();
    //select * from heros where
    $men = heros::where('Gender','=','Female')->get();
    return view('heros',compact('page_title','heros','men'));
   }
}
