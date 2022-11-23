<?php

use App\Http\Controllers\employeeController;
use App\Http\Controllers\employeeMangementController;
use App\Http\Controllers\HomeController;
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


//Teacher management
Route::get('/teacherReg', [teacherController::class, 'teacherReg'])->name('teacherReg');
Route::post('/teacherReg/teacherInsert', [teacherController::class, 'teacherInsert'])->name('teacherInsert');
Route::get('/teacherLoginFailed', [teacherController::class, 'teacherLoginFailed'])->name('teacherLoginFailed');


Route::get('/teacherLogin', [teacherController::class, 'teacherLoginPage'])->name('teacherLoginPage');
Route::post('/teacherLoginCheck', [teacherController::class, 'teacherLoginCheck'])->name('teacherLoginCheck');



Route::get('/teacherProfilePage', [teacherController::class, 'teacherProfilePage'])->name('teacherProfilePage');
Route::post('/teacherProfilePage/teacherPicUpload', [teacherController::class, 'teacherPicUpload'])->name('teacherPicUpload');
Route::get('/logoutTeacher', [teacherController::class, 'logoutTeacher'])->name('logoutTeacher');

