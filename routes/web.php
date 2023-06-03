<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Test;


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
    return view('auth.register');
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
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('inicio');
    })->name('dashboard');
    
});



Route::delete('test/{id}', [TestController::class ,'destroy'])->name('test.delete');
Route::get('productos/{id}', [TestController::class,'show'])->name('show');
Route::get('producto/crear', [TestController::class,'create'])->name('create');
Route::post('productos',[TestController::class,'store'])->name('store');