<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function home(){
        return view('home');
    }
    public function produtos(){
        return view('produtos');
    }
    public function sobre(){
        return view('sobre');
    }

}
