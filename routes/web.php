<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/prototype', 'prototype.index')->name('prototype');

Route::view('/prototype/home', 'prototype.home')->name('prototypehome');

Route::view('/prototype/orderHome', 'prototype.orderHome')->name('prototypeorderHome');
