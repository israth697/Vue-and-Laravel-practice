<?php

use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('app');
})->name('application');




Route::post('/student-save', [StudentController::class, 'save'])->name('student.save');
Route::get('/student-list', [StudentController::class, 'list'])->name('student.list');
// Route::get('/student-edit', [StudentController::class, 'edit'])->name('student.edit');
// Route::post('/student-update', [StudentController::class, 'update'])->name('student.update');

Route::get('/student-delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');


Route::post('/teacher_save', [TeacherController::class, 'teachers_save'])->name('teacher.save');
Route::get('/teacher_list', [TeacherController::class, 'teachers_list'])->name('teacher.list');
Route::get('/teacher-edit/{id}', [TeacherController::class, 'teacher_edit'])->name('teacher.edit');
Route::post('/teacher-update/{id}', [TeacherController::class, 'teacher_update'])->name('teacher.update');

Route::get('/teacher_delete/{id}', [TeacherController::class, 'teacher_delete'])->name('teacher.delete');
