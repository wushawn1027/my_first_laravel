<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('RWD');
    }

    public function color(){
        return view('color');
    }

    public function bmi(){
        return view('BMI');
    }

    public function dice(){
        return view('dice');
    }
}
