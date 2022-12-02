<?php

use App\Http\Controllers\Admin\CampusController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('', [HomeController::class, 'index'])->name('admin.index');

//Users
Route::resource('users', UserController::class)->only(['index', 'create', 'edit', 'show'])->names('admin.users');

//Estudiantes
Route::resource('students', StudentController::class)->only(['index', 'create', 'show', 'edit', 'destroy'])->names('admin.students');

//Carreras
Route::resource('careers', CareerController::class)->only(['index', 'create', 'show', 'edit', 'destroy'])->names('admin.careers');

//Campus
Route::resource('campuses', CampusController::class)->only(['index', 'create', 'show', 'edit', 'destroy'])->names('admin.campuses');