<?php

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
    return view('welcome');
});

Route::get('/index', [\App\Http\Controllers\EmployeeController::class,'index']);

Route::delete('employees/delete/{id}', [\App\Http\Controllers\EmployeeController::class, 'delete'])->name('employees.delete');

Route::get('employees/edit/{id}',[\App\Http\Controllers\EmployeeController::class, 'edit'])->name('employees.edit');

Route::put('/employees/update/{id}', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('employees.update');


