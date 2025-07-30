<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detyra1;
class detyra1controller extends Controller
{
    public function A(){
        return view('detyra1');
    }

    public function B(Request $request){
        $request->validate([
            'emri' => 'required',
            'mosha' => 'required|integer|min:1|max:120',
        ]);

        return "<h1>Te dhenat u ruajten</h1>";
    }

    public function C(){
        $x=detyra1::all();
        return view('detyra1', compact('detyra1'));
    }
    public function D(Request $request){
         $x = detyra1::find($request->id);
        $x->update([
            emri'=>$request->name,
            'mosha'=>$request->age
        ]);
           
        return "<h1>Te dhenat u perditesuan</h1>";
    }
}