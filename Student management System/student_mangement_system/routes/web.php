<?php

use App\Http\Controllers\employeeController;
use App\Http\Controllers\employeeMangementController;
use App\Http\Controllers\teacherController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'Adminhome'])->name('home');

//employeeMangement page

Route::get('/employeeMangementPage', [employeeMangementController::class, 'employeeMangementPage'])->name('employeeMangementPage');


//Employees management
Route::get('/employeeReg', [employeeController::class, 'employeeReg'])->name('employeeReg');
Route::post('/employeeReg/employeeInsert', [employeeController::class, 'employeeInsert'])->name('employeeInsert');



//Teacher management
Route::get('/teacherProfilePage', [teacherController::class, 'teacherProfilePage'])->name('teacherProfilePage');

