<?php

use App\Http\Controllers\clientPageController;
use App\Http\Controllers\homeSectionController;
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



Route::get('/clientPage', [clientPageController::class, 'clientPage'])->name('clientPage');


//Home Section

Route::get("/homeSectionpage",[homeSectionController::class, "homeSectionpage"])->name("homeSectionpage");
Route::post("/homeSectionpage/homeInsert",[homeSectionController::class, "homeInsert"])->name("homeInsert");
Route::post("/homeSectionpage/homeSocialInsert",[homeSectionController::class, "homeSocialInsert"])->name("homeSocialInsert");
Route::get("/homeSectionpage/Homedelete/{homeSecId}", [homeSectionController::class, "Homedelete"])->name("Homedelete");
Route::get("/homeSectionpage/HomeParmanentdeletePage", [homeSectionController::class, "HomeParmanentdeletePage"])->name("HomeParmanentdeletePage");
Route::get("/homeSectionpage/HomeParmanentRestore/{homeSecResId}", [homeSectionController::class, "HomeParmanentRestore"])->name("HomeParmanentRestore");
Route::get("/homeSectionpage/HomeParmanentdelete/{homeSecParDelId}", [homeSectionController::class, "HomeParmanentdelete"])->name("HomeParmanentdelete");



Route::get("/homeSectionpage/homeSocialDeletePage/{homesocialPageId}", [homeSectionController::class, "homeSocialDeletePage"])->name("homeSocialDeletePage");
Route::get("/homeSectionpage/homeSocialDeleteResore/{homesocialPageId}", [homeSectionController::class, "homeSocialDeleteResore"])->name("homeSocialDeleteResore");
Route::get("/homeSectionpage/homeSocialParmanantDelete/{homeSecSocialParDelId}", [homeSectionController::class, "homeSocialParmanantDelete"])->name("homeSocialParmanantDelete");


