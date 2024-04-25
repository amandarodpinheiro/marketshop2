<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home');
Route::view('/cria-conta', 'home');

Route::view('/testedeconteudo', 'teste');

Route::view('/cria-conta', '/cria-conta');
route::post('salva-usuario', function (Request $request) {
    dd($request);
})->name('salva-usuario');
