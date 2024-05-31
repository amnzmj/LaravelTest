<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {//retornar vista y lógica
    return view('welcome');
});
//welcome
route::view('/','welcome')->name('home');//retornar solo vista
route::view('/contact','contact')->name('contact');//rutas con nombre
route::view('/blog','blog')->name('blog');
route::view('/about','about')->name('about');
