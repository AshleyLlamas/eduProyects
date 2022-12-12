<?php

use App\Http\Controllers\Admin\AssistanceController;
use App\Http\Controllers\Admin\CampusController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\CheckController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Admin\QuestionnaireController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('', [HomeController::class, 'index'])->name('admin.index');

//Users
Route::resource('users', UserController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.users');

//Estudiantes
Route::resource('students', StudentController::class)->only(['index', 'create', 'show', 'edit', 'destroy'])->names('admin.students');

//Carreras
Route::resource('careers', CareerController::class)->only(['index', 'create', 'show', 'edit', 'destroy'])->names('admin.careers');

//Campus
Route::resource('campuses', CampusController::class)->only(['index', 'create', 'show', 'edit', 'destroy'])->names('admin.campuses');

//Questionnaire
Route::resource('questionnaires', QuestionnaireController::class)->only(['index', 'create', 'show', 'edit', 'destroy'])->names('admin.questionnaires');

//Check
Route::resource('checks', CheckController::class)->only(['index', 'show'])->names('admin.checks');

//Assistance
Route::resource('assistances', AssistanceController::class)->only(['index', 'show'])->names('admin.assistances');