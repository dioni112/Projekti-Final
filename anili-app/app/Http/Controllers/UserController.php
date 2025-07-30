<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
          $request->validate([
            'emri'=> 'required|string|min:3',
            'mbiemri'=>'required|string|min:3',
            'email'=>'required|email|unique:users, email',
            'brand'=>'required|string',
            'model'=>'required|string',
            'year'=>'required|integer|min:1989' . date('Y'),
          ]);

          $user = User::create([
            'emri' =>$request->emri,
            'mbiemri'=>$request->mbiemri,
            'email'=>$request->email,
          ]);

          $user->car()->create([

          ]);
    }
      
       
}
        $user->car()->create([
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
        ]);

