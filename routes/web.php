<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('app');
})->name('application');



Route::post('/student-save', [StudentController::class, 'save'])->name('student.save');
Route::get('/student-list', [StudentController::class, 'list'])->name('student.list');
