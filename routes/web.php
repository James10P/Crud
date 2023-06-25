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

Route::get('inicio', function () {   
    return view('inicio');
})->name('inicio');

Route::get('admi', function () {   
    return view('admi');
})->name('admi');

Route::get('login', function () {   
    return view('auth.login');
})->name('login');

Route::get('edit_usurs', function () {   
    return view('edit_usurs');
})->name('edit_usurs');

Route::get('Usuarioss', function () {   
    return view('Usuarioss');
})->name('Usuarioss');

Route::get('usuariosss', function () {   
    return view('usuariosss');
})->name('usuariosss');

Route::get('reset-password', function () {   
    return view('auth.reset-password');
})->name('reset-password');

Route::get('details', function () {   
    return view('details');
})->name('Details');

Route::get('verify-email', function () {   
    return view('auth.verify-email');
})->name('verify-email');

Route::get('register', function () {   
    return view('auth.register');
})->name('register');

Route::get('reset-password', function () {   
    return view('auth.reset-password');
})->name('reset-password');

Route::get('Login_users', function () {   
    return view('Login_users');
})->name('Administrador');

Route::get('edit', function () {   
    return view('edit');
})->name('Editar');

Route::get('/Producto', function () {
    return view('Product');
})->name('Producto');

Route::get('Detailss', function () {
    return view('Detailss');
})->name('Detailss');

Route::get('/Usurios', function () {
    return view('Usuarios');
})->name('LISTA DE USUARIOS');

Route::get('/login.php', function () {
    return view('login.php');
})->name('LISTA DE USUARIOS');

Route::get('/details', function () {
    return view('details');
})->name('DETALLES');

Route::get('/administrador', function () {
    return view('administrador');
})->name('Administrador');

Route::get('/mesas', function () {
    return view('mesas');
})->name('Mesas');

Route::get('/cronometro', function () {
    return view('cronometro');
})->name('CRONOMETRO');

Route::get('/buy', function () {
    return view('buy');
})->name('buy');

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