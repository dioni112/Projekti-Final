<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{
    public function index(){
        $name = 'Digital School Student';
        return view('hello', ['name'=> $name]);
    }
}

