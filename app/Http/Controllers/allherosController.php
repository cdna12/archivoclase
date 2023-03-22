<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\allheros;

class allherosController extends Controller
{
   public function indexall(){
    $page_title = "Super Heros";
    // select * from superheros
    $all = heros::all();
    //select * from heros where
    return view('heros',compact('page_title','heros','men'));
   }
}
