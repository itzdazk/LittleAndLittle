<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect::to('/trangchu');
});

Route::get('/trangchu', function () {
    return view('homepage');
});

Route::get('/sukien', [App\Http\Controllers\EventController::class, 'index']);

Route::get('/sukien/{id}', [App\Http\Controllers\EventController::class, 'show']);

Route::get('/lienhe', function () {
    return view('contact');
});

Route::post('/lienhe', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');


Route::get('/thanhtoan', function () {
    return view('payment');
});

Route::post('/trangchu', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');

Route::post('/thanhtoan', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
