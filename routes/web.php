<?php

use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('app');
})->name('application');




Route::post('/student-save', [StudentController::class, 'save'])->name('student.save');
Route::get('/student-list', [StudentController::class, 'list'])->name('student.list');
// Route::get('/student-edit', [StudentController::class, 'edit'])->name('student.edit');
// Route::post('/student-update', [StudentController::class, 'update'])->name('student.update');

Route::get('/student-delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
