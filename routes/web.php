<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' , ['title' => 'Home'] );
});

Route::get('/product', function () {
    return view('product' , ['title' => 'Produk']);
});

Route::get('/outlet', function () {
    return view('outlet', ['title' => 'Outlet']);
});

Route::get('/location', function () {
    return view('location', ['title' => 'Lokasi']);
});
