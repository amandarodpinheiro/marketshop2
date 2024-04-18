<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home');
Route::view('/cria-conta', 'home');

Route::view('/testedeconteudo', 'teste');

Route::view('/cria-conta', '/cria-conta');
