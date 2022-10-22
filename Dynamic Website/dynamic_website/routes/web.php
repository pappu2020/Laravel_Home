<?php

use App\Http\Controllers\aboutMeSectionController;
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

Route::post("/homeSectionpage/homeContentUpdate", [homeSectionController::class, "homeContentUpdate"])->name("homeContentUpdate");





Route::get("/homeSectionpage/homeSocialDeletePage/{homesocialPageId}", [homeSectionController::class, "homeSocialDeletePage"])->name("homeSocialDeletePage");
Route::get("/homeSectionpage/homeSocialDeleteResore/{homesocialPageId}", [homeSectionController::class, "homeSocialDeleteResore"])->name("homeSocialDeleteResore");
Route::get("/homeSectionpage/homeSocialParmanantDelete/{homeSecSocialParDelId}", [homeSectionController::class, "homeSocialParmanantDelete"])->name("homeSocialParmanantDelete");

Route::post("/homeSectionpage/homeSocialUpdate", [homeSectionController::class, "homeSocialUpdate"])->name("homeSocialUpdate");
Route::get("/homeSectionpage/homeSocialUpdateShow/{homeSocialUpdate}", [homeSectionController::class, "homeSocialUpdateShow"])->name("homeSocialUpdateShow");






//About me section

Route::get("/aboutSectionpage", [aboutMeSectionController::class, "aboutSectionpage"])->name("aboutSectionpage");
Route::post("/aboutSectionpage/aboutSectionInsert", [aboutMeSectionController::class, "aboutSectionInsert"])->name("aboutSectionInsert");
Route::post("/aboutSectionpage/aboutSectionDesInsert", [aboutMeSectionController::class, "aboutSectionDesInsert"])->name("aboutSectionDesInsert");


//update
Route::get("/aboutSectionpage/aboutSectionpageUpdate/{aboutSecInfoId}", [aboutMeSectionController::class, "aboutSectionpageUpdate"])->name("aboutSectionpageUpdate");
Route::post("/aboutSectionpage/aboutSectionUpdate", [aboutMeSectionController::class, "aboutSectionUpdate"])->name("aboutSectionUpdate");
Route::get("/aboutSectionpage/aboutSectionDesPageUpdate/{aboutSecDesInfoId}", [aboutMeSectionController::class, "aboutSectionDesPageUpdate"])->name("aboutSectionDesPageUpdate");

Route::post("/aboutSectionpage/aboutSectionDesUpdate", [aboutMeSectionController::class, "aboutSectionDesUpdate"])->name("aboutSectionDesUpdate");



//delete

Route::get("/aboutSectionpage/aboutSectiondelete/{aboutSecId}", [aboutMeSectionController::class, "aboutSectiondelete"])->name("aboutSectiondelete");
Route::get("/aboutSectionpage/aboutSectionParmanantDeletePage", [aboutMeSectionController::class, "aboutSectionParmanantDeletePage"])->name("aboutSectionParmanantDeletePage");

Route::get("/aboutSectionpage/aboutSectionParmanantResore/{aboutSecResId}", [aboutMeSectionController::class, "aboutSectionParmanantResore"])->name("aboutSectionParmanantResore");

Route::get("/aboutSectionpage/aboutSectionpageParmanantDelete/{aboutSecParDelId}", [aboutMeSectionController::class, "aboutSectionpageParmanantDelete"])->name("aboutSectionpageParmanantDelete");



Route::get("/aboutSectionpage/aboutSectionDesdelete/{aboutSecDesId}", [aboutMeSectionController::class, "aboutSectionDesdelete"])->name("aboutSectionDesdelete");
Route::get("/aboutSectionpage/aboutSectionDesParmanantDeletePage", [aboutMeSectionController::class, "aboutSectionDesParmanantDeletePage"])->name("aboutSectionDesParmanantDeletePage");
Route::get("/aboutSectionpage/aboutSectionDesParmanantResore/{aboutSecDEsResId}", [aboutMeSectionController::class, "aboutSectionDesParmanantResore"])->name("aboutSectionDesParmanantResore");
Route::get("/aboutSectionpage/aboutSectionpageDesParmanantDelete/{aboutSecDesParDelId}", [aboutMeSectionController::class, "aboutSectionpageDesParmanantDelete"])->name("aboutSectionpageDesParmanantDelete");