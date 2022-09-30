<?php

namespace App\Http\Controllers;

use App\Models\TuVung;
use Illuminate\Http\Request;

class TuVungController extends Controller
{
    //
    public function getData1(){

        return view('dota1');
    }
    public function getData2(){

        return view('dota2');
    }
    public function getData3(){

        return view('dota3');
    }
}
