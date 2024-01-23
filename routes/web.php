<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

 
 
Route::get('/',[FilterController::class,'home'])->name('home');
Route::resource('department', DepartmentController::class);
Route::resource('student', StudentController::class);
Route::resource('user', UserController::class);

Route::get('/filter/{department_id}', [FilterController::class, 'department'])->name('filter.department');
Route::get('/f', function () {
    return view('filter.menu');
})->name('f');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
