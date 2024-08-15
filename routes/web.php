<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/index',[UserController::class,'loginFunction'])->name('Login');
Route::get('/logout', [UserController::class,'logoutFunction'])->name('Logout');
// company Route
Route::resource('/company', CompanyController::class);
// employee Route
Route::resource('/employee', EmployeeController::class);