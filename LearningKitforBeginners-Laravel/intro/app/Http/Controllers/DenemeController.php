<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public function deneme($id)
    {
        return view('myview')->with('numara', $id); // bu şekilde view'a data yollayabiliriz
    }

    public function deneme2($isim,$soyisim)
    {
        return view('myview2', compact('isim','soyisim')); // bu şekilde de view'a data yollayabiliriz
    }
    public function deneme3(){
        $people = ['enes','yusuf','yavuz'];
        return view('myview3',compact('people'));
    }
    public function index(){
        return view("index");
    }
}
