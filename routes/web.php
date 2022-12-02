<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

//ACCESOS
Route::view('/acceso', 'auth.acceso')->name('acceso');
Route::view('/acceso-administrativo', 'auth.acceso-administrativo')->name('acceso.administrativo');

Route::view('/mi-perfil', 'auth.mi-perfil')->name('mi.perfil')->middleware('auth:students');
//Estudiantes
//Route::resource('students', StudentController::class)->only(['show'])->names('students');

Auth::routes(["register" => false, "login" => false]);