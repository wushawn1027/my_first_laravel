<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        return view('banner.index');
    }

    public function create(){
        return view('banner.create');
    }

    public function store(){
        return view('index');
    }

    public function edit(){
        return view('index');
    }

    public function update(){
        return view('index');
    }

    public function delete(){
        return view('index');
    }
}
