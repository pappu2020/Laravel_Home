<?php

use App\Http\Controllers\aboutMeSectionController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\clientPageController;
use App\Http\Controllers\contacFormController;
use App\Http\Controllers\contactMeController;
use App\Http\Controllers\customerQuotesController;
use App\Http\Controllers\homeSectionController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\recentWorkController;
use App\Http\Controllers\serviceSectionController;
use App\Models\contactFormModel;
use App\Models\contactMeModel;
use App\Models\recentWorkModel;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route("clientPage");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/clientPage', [clientPageController::class, 'clientPage'])->name('clientPage');
Route::get('/Portfolio', [clientPageController::class, 'clientPage'])->name('clientPage');


//Profile Page

Route::get('/profilePage', [adminController::class, 'profilePage'])->name('profilePage');
Route::post('/profileImgUpload', [adminController::class, 'profileImgUpload'])->name('profileImgUpload');















//Home Section

Route::get("/homeSectionpage",[homeSectionController::class, "homeSectionpage"])->name("homeSectionpage");
Route::post("/homeSectionpage/homeInsert",[homeSectionController::class, "homeInsert"])->name("homeInsert");
Route::post("/homeSectionpage/homeSocialInsert",[homeSectionController::class, "homeSocialInsert"])->name("homeSocialInsert");
Route::get("/homeSectionpage/Homedelete/{homeSecId}", [homeSectionController::class, "Homedelete"])->name("Homedelete");
Route::get("/homeSectionpage/HomeParmanentdeletePage", [homeSectionController::class, "HomeParmanentdeletePage"])->name("HomeParmanentdeletePage");
Route::get("/homeSectionpage/HomeParmanentRestore/{homeSecResId}", [homeSectionController::class, "HomeParmanentRestore"])->name("HomeParmanentRestore");
Route::get("/homeSectionpage/HomeParmanentdelete/{homeSecParDelId}", [homeSectionController::class, "HomeParmanentdelete"])->name("HomeParmanentdelete");

Route::post("/homeSectionpage/homeContentUpdate", [homeSectionController::class, "homeContentUpdate"])->name("homeContentUpdate");


//CV
Route::get("/pappu_saha_cv", [homeSectionController::class, "pappu_saha_cv"])->name("pappu_saha_cv");





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





//Service Section


Route::get("/serviceSectionPage",[serviceSectionController::class, "serviceSectionPage"])->name("serviceSectionPage");
Route::post("/serviceSectionPage/serviceSectionInsert",[serviceSectionController::class, "serviceSectionInsert"])->name("serviceSectionInsert");
Route::get("/serviceSectionEditPage/{serviceEditId}", [serviceSectionController::class, "serviceSectionEditPage"])->name("serviceSectionEditPage");
Route::post("/serviceSectionUpdate", [serviceSectionController::class, "serviceSectionUpdate"])->name("serviceSectionUpdate");

Route::get("/serviceSectionDelete/{serviceDeleteId}", [serviceSectionController::class, "serviceSectionDelete"])->name("serviceSectionDelete");
Route::get("/serviceSectionParmanantDeletePage", [serviceSectionController::class, "serviceSectionParmanantDeletePage"])->name("serviceSectionParmanantDeletePage");
Route::get("/serviceSectionParmanantDeletePage/serviceSectionRestore/{serviceRestoreId}", [serviceSectionController::class, "serviceSectionRestore"])->name("serviceSectionRestore");
Route::get("/serviceSectionParmanantDeletePage/serviceSectionParmanantDelete/{serviceParDelId}", [serviceSectionController::class, "serviceSectionParmanantDelete"])->name("serviceSectionParmanantDelete");






//Recent work

Route::get("/recentWorkPage", [recentWorkController::class, "recentWorkPage"])->name("recentWorkPage");
Route::post("/recentWorkPage/recentWorkInsert", [recentWorkController::class, "recentWorkInsert"])->name("recentWorkInsert");

//edit
Route::get("/recentEditPage/{recentEditId}", [recentWorkController::class, "recentEditPage"])->name("recentEditPage");
Route::post("/recentEditPage/recentWorkUpdate", [recentWorkController::class, "recentWorkUpdate"])->name("recentWorkUpdate");





Route::get("/recentEditPage/recentGeneralDelete/{recentDelId}", [recentWorkController::class, "recentGeneralDelete"])->name("recentGeneralDelete");
Route::get("/recentTrashbbinPage", [recentWorkController::class, "recentTrashbbinPage"])->name("recentTrashbbinPage");

Route::get("/recentTrashbbinPage/recentTrashRestore/{recentTrashRestoreId}", [recentWorkController::class, "recentTrashRestore"])->name("recentTrashRestore");
Route::get("/recentTrashbbinPage/recentTrashDelete/{recentTrashDeleteId}", [recentWorkController::class, "recentTrashDelete"])->name("recentTrashDelete");


//Recent Work image Upload

Route::get("/addRecentWorkImagePage", [recentWorkController::class, "addRecentWorkImagePage"])->name("addRecentWorkImagePage");
Route::post("/addRecentWorkImageInsert", [recentWorkController::class, "addRecentWorkImageInsert"])->name("addRecentWorkImageInsert");



//single recent work
Route::get("/singleRecentWorkPage/{reecentId}", [recentWorkController::class, "singleRecentWorkPage"])->name("singleRecentWorkPage");






//Recent Work Number Section

Route::Post("/recentWorkNumberInsert", [recentWorkController::class, "recentWorkNumberInsert"])->name("recentWorkNumberInsert");
Route::get("/recentWorkNumberGeneralDelete/{recentNumGenDeleteId}", [recentWorkController::class, "recentWorkNumberGeneralDelete"])->name("recentWorkNumberGeneralDelete");
Route::get("/recentWorkNumberTrashRestore/{recentNumTrashId}", [recentWorkController::class, "recentWorkNumberTrashRestore"])->name("recentWorkNumberTrashRestore");
Route::get("/recentWorkNumberTrashParmanantDelete/{recentNumTrashParDelId}", [recentWorkController::class, "recentWorkNumberTrashParmanantDelete"])->name("recentWorkNumberTrashParmanantDelete");





//Customer Quotes Section


Route::get("/customerQuotesPage", [customerQuotesController::class, "customerQuotesPage"])->name("customerQuotesPage");
Route::post("/customerQuotesPage/customerInsert", [customerQuotesController::class, "customerInsert"])->name("customerInsert");
Route::get("/customerQuotesEditPage/{customerEditPageId}", [customerQuotesController::class, "customerQuotesEditPage"])->name("customerQuotesEditPage");
Route::post("/customerQuotesEditPage/cutomerQuotesUpdate", [customerQuotesController::class, "cutomerQuotesUpdate"])->name("cutomerQuotesUpdate");
Route::get("/customerQuotesEditPage/cutomerQuotesGenDel/{cusGenDelId}", [customerQuotesController::class, "cutomerQuotesGenDel"])->name("cutomerQuotesGenDel");



//Trash
Route::get("/customerTrashbbinPage", [customerQuotesController::class, "customerTrashbbinPage"])->name("customerTrashbbinPage");
Route::get("/customerTrashbbinPage/customerQuotesRestore/{cutomerQuotesresId}", [customerQuotesController::class, "customerQuotesRestore"])->name("customerQuotesRestore");
Route::get("/customerTrashbbinPage/cutomerQuotesParDel/{cutomerQuotesParId}", [customerQuotesController::class, "cutomerQuotesParDel"])->name("cutomerQuotesParDel");








//Contact ME section

Route::get("/contactMePage", [contactMeController::class, "contactMePage"])->name("contactMePage");
Route::post("/contactMePage/contactMeInsert", [contactMeController::class, "contactMeInsert"])->name("contactMeInsert");
Route::post("/contactMePage/contactMeUpdate", [contactMeController::class, "contactMeUpdate"])->name("contactMeUpdate");
Route::get("/contactMePage/contactMeGenDel/{contactMeGenId}", [contactMeController::class, "contactMeGenDel"])->name("contactMeGenDel");
Route::get("/contactMeTrashedPage", [contactMeController::class, "contactMeTrashedPage"])->name("contactMeTrashedPage");
Route::get("/contactMeTrashedPage/contactMeRestore/{contacMEresId}", [contactMeController::class, "contactMeRestore"])->name("contactMeRestore");
Route::get("/contactMeTrashedPage/contactMeParDel/{contacMEParDelId}", [contactMeController::class, "contactMeParDel"])->name("contactMeParDel");




//Contact me form

Route::post("/contactMeFormInsert", [contacFormController::class, "contactMeFormInsert"])->name("contactMeFormInsert");
Route::get("/contactView", [contacFormController::class, "contactView"])->name("contactView");






//for displaying PDF
Route::get('/display_pdf',[PdfController::class,"index"])->name("display_pdf");





