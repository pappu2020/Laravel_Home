<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userProfileController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//user

Route::get("userListPage",[UserController::class, "userListPage"])->name("userListPage");
Route::get("userDelete/{userId}",[UserController::class, "userDelete"])->name("userDelete");

//Trash user

Route::get("trashUserPage", [UserController::class, "trashUserPage"])->name("trashUserPage");
Route::get("userParDelete/{userId}", [UserController::class, "userParDelete"])->name("userParDelete");
Route::get("userRestore/{userId}", [UserController::class, "userRestore"])->name("userRestore");


//user profile

Route::get("userProfilePage", [userProfileController::class, "userProfilePage"])->name("userProfilePage");
Route::post("userProfileUpdate", [userProfileController::class, "userProfileUpdate"])->name("userProfileUpdate");



//Category

Route::get("categoryPage", [categoryController::class, "categoryPage"])->name("categoryPage");
Route::post("catagoryInsert", [categoryController::class, "catagoryInsert"])->name("catagoryInsert");

Route::get("categoryEditPage/{cataId}", [categoryController::class, "categoryEditPage"])->name("categoryEditPage");
Route::post("categoryUpdate", [categoryController::class, "categoryUpdate"])->name("categoryUpdate");





