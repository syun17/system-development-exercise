<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('prototype.customer.orderHome');
});

Route::view('/prototype', 'prototype.customer.index')->name('prototype');


Route::view('/prototype/home', 'prototype.customer.home')->name('prototypehome');

Route::view('/prototype/orderHome', 'prototype.customer.orderHome')->name('prototypeorderHome');

Route::view('/prototype/detail', 'prototype.customer.detail')->name('prototypedetail');

Route::view('/prototype/cart', 'prototype.customer.cart')->name('prototypecart');

Route::view('/prototype/delete', 'prototype.customer.delete')->name('prototypedelete');

Route::view('/prototype/history', 'prototype.customer.history')->name('prototypehistory');

Route::view('/prototype/call', 'prototype.customer.call')->name('prototypecall');

Route::view('/prototype/checkout', 'prototype.customer.checkout')->name('prototypecheckout');

Route::view('/prototype/confirm', 'prototype.customer.confirm')->name('prototypeconfirm');

Route::view('/prototype/add', 'prototype.customer.add')->name('prototypeadd');

Route::view('/prototype/complete', 'prototype.customer.complete')->name('prototypecomplete');

Route::view('/prototype/thanks', 'prototype.customer.thanks')->name('prototypethanks');

Route::view('/prototype/login', 'prototype.staff.login')->name('prototypelogin');

Route::view('/prototype/home', 'prototype.staff.home')->name('prototypehome');

Route::view('/prototype/order-menu', 'prototype.staff.order-menu')->name('prototypeorder-menu');

Route::view('/prototype/order-history', 'prototype.staff.order-history')->name('prototypeorder-history');

Route::view('/prototype/order-status', 'prototype.staff.order-status')->name('prototypeorder-status');

Route::view('/prototype/seat-management', 'prototype.staff.seat-management')->name('prototypeseat-management');

Route::view('/prototype/menu-management', 'prototype.staff.menu-management')->name('prototypemenu-management');

Route::view('/prototype/stock-status', 'prototype.staff.stock-status')->name('prototypestock-status');

Route::view('/prototype/menu-add', 'prototype.staff.menu-add')->name('prototypemenu-add');

Route::view('/prototype/menu-edit-list', 'prototype.staff.menu-edit-list')->name('prototypemenu-edit-list');

Route::view('/prototype/menu-edit', 'prototype.staff.menu-edit')->name('prototypemenu-edit');

Route::post('/prototype/cart/clear', function (Request $request) {
    $request->session()->forget('cart');
    return redirect('/prototype/cart?cleared=1');
})->name('prototype.cart.clear');

