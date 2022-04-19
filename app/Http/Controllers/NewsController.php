<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function micro(){
        return view('others.RWD');
    }

    public function color(){
        return view('others.color');
    }

    public function dice(){
        return view('others.dice');
    }
}
