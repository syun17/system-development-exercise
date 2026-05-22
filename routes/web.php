<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/prototype', 'prototype.index')->name('prototype');


Route::view('/prototype/home', 'prototype.home')->name('prototypehome');

Route::view('/prototype/orderHome', 'prototype.orderHome')->name('prototypeorderHome');

Route::view('/prototype/detail', 'prototype.detail')->name('prototypedetail');

Route::view('/prototype/cart', 'prototype.cart')->name('prototypecart');

Route::view('/prototype/history', 'prototype.history')->name('prototypehistory');

Route::view('/prototype/call', 'prototype.call')->name('prototypecall');

Route::view('/prototype/checkout', 'prototype.checkout')->name('prototypecheckout');

Route::view('/prototype/confirm', 'prototype.confirm')->name('prototypeconfirm');

Route::view('/prototype/add', 'prototype.add')->name('prototypeadd');

Route::view('/prototype/complete', 'prototype.complete')->name('prototypecomplete');

Route::view('/prototype/thanks', 'prototype.thanks')->name('prototypethanks');

Route::view('/prototype/login', 'prototype.login')->name('prototypelogin');

Route::view('/prototype/home', 'prototype.home')->name('prototypehome');

Route::view('/prototype/order-status', 'prototype.order-status')->name('prototypeorder-status');

Route::view('/prototype/seat-management', 'prototype.seat-management')->name('prototypeseat-management');

Route::view('/prototype/menu-management', 'prototype.menu-management')->name('prototypemenu-management');

Route::view('/prototype/stock-status', 'prototype.stock-status')->name('prototypestock-status');

Route::view('/prototype/menu-add', 'prototype.menu-add')->name('prototypemenu-add');

Route::view('/prototype/menu-edit-list', 'prototype.menu-edit-list')->name('prototypemenu-edit-list');

Route::view('/prototype/menu-edit', 'prototype.menu-edit')->name('prototypemenu-edit');

