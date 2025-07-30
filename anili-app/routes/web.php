<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contact;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create'[UserController::class. 'create']);
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/contact', [contact::class, 'show']);
Route::post('/contact', [contact::class, 'submit'])->name('contact.submit');



Route::get('/', function () {
    return view('welcome');
});




Route::get('/about', function(){
    return 'Welcome to Laravel Class -Digital School';
});

Route::get('/hello/{name}', function($name){
    return "Pershendetje, $name";
});

Route::get('/profile', function(){
$name = 'Arber';
return view('profile', ['name'=>$name]);
});









