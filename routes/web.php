<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecarioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\LibroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('bibliotecarios', BibliotecarioController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('libros', LibroController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
