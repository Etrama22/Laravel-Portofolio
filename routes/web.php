<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Services', function () {
    return view('services');
});

Route::get('/Portofolios', function () {
    return view('portofolio');
});

Route::get('/Skills', function () {
    return view('skills');
});

Route::get('/Contacts', function () {
    return view('contact');
});
