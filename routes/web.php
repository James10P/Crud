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

Route::get('/', function () {   
    return view('index');
})->name('Inicio');

Route::get('/Producto', function () {
    return view('Product');
})->name('Producto');

Route::get('/details', function () {
    return view('details');
})->name('DETALLES');

Route::get('/mesas', function () {
    return view('mesas');
})->name('Mesas');

Route::get('/cronometro', function () {
    return view('cronometro');
})->name('CRONOMETRO');

Route::get('/buy', function () {
    return view('buy');
})->name('buy');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
