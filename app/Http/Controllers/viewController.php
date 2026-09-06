<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function home(){
         return view('tampilan.home');
    }
    public function about(){
         return view('tampilan.about');
    }
    public function menu(){
         return view('tampilan.menu');
    }
}


