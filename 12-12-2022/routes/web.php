<?php

use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\addColorController;
use App\Http\Controllers\addInventoryController;
use App\Http\Controllers\addSizeController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\catagory;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\couponController;
use App\Http\Controllers\customerLoginRegController;
use App\Http\Controllers\customerProfileController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\productController;
use App\Http\Controllers\productTrackingController;
use App\Http\Controllers\SubcatagoryController;
use App\Http\Controllers\usersController;
use App\Models\cartModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/adminLogin", [frontendController::class, "adminLogin"])->name("adminLogin");

//Frontend Section

Route::get("/",[frontendController::class,"indexFrontend"])->name("indexFrontend");
Route::get("product/productDetails/{slug}",[frontendController::class,"productDetails"])->name("productDetails");
Route::POST("getSize",[frontendController::class,"getSize"]);

















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/userView",[usersController::class,"userViewFun"])->name("userViewPage");

Route::get("/user/userDelete/{user_id}",[usersController::class,"userDeleteFunction"])->name("userDeletePage");
Route::get("/profile",[usersController::class,"profilePage"])->name("profilePage");
Route::post("/profile/nameChange", [usersController::class, "profileNameUpdate"])->name("profileNameUpdate");
Route::post("/profile/PasswordChange", [usersController::class, "profilePasswordUpdate"])->name("profilePasswordUpdate");
Route::post("/profile/profilePicChange", [usersController::class, "profilePicChange"])->name("profilePicChange");




//catagory Section

Route::get("/catagory",[catagory::class,"catagoryPage"])->name("catagoryPage");
Route::post("/catagory/catagotyStore", [catagory::class, "catagoryInsert"])->name("catagoryInsert");
Route::get("/catagory/catagoryDelete/{categoryId}", [catagory::class, "catagoryDelete"])->name("catagoryDelete");
Route::get("/catagory/catagoryEditPage/{categoryId}", [catagory::class, "catagoryEditPage"])->name("catagoryEditPage");
Route::post("/catagory/catagotyUpdate", [catagory::class, "catagotyUpdate"])->name("catagotyUpdate");

//catagory Trash bin

Route::get("/catagory_trash_bin", [catagory::class, "catagory_trash_bin"])->name("catagory_trash_bin");
Route::get("/catagory_trash_bin/category_restore/{category_trash_id}", [catagory::class, "category_restore"])->name("category_restore");
Route::get("/catagory_trash_bin/category_Parmanant_delete/{category_trash_id}", [catagory::class, "category_Parmanant_delete"])->name("category_Parmanant_delete");



//Sub-category Section

Route::get("/SubcatagoryPage", [SubcatagoryController::class, "SubcatagoryPage"])->name("SubcatagoryPage");
Route::post("/Subcatagory/SubcatagotyStore", [SubcatagoryController::class, "SubcatagoryInsert"])->name("SubcatagoryInsert");



//Product Section


Route::get("/productPage",[productController::class, "productPage"])->name("productPage");

Route::post("/ProductPageCatESubInfo",[productController::class, "ProductPageCatESubInfo"]);
Route::post("/ProductPage/productInsert",[productController::class, "productInsert"])->name("productInsert");

Route::get("/productViewPage", [productController::class, "productViewPage"])->name("productViewPage");



Route::get("/productViewPage/productDelete/{productDeleteId}", [productController::class, "productDelete"])->name("productDelete");







//Inventory 
Route::get("/productViewPage/addInventoryPage/{product_id}", [productController::class, "addInventoryPage"])->name("addInventoryPage");
Route::post("/productViewPage/addInventoryPage/inventoryInsert", [productController::class, "inventoryInsert"])->name("inventoryInsert");


Route::get("/addSizePage", [addSizeController::class, "addSizePage"])->name("addSizePage");
Route::post("/addSizePage/sizeInsert", [addSizeController::class, "sizeInsert"])->name("sizeInsert");


Route::get("/addColorPage", [addColorController::class, "addColorPage"])->name("addColorPage");
Route::post("/addSizePage/colorInsert", [addColorController::class, "colorInsert"])->name("colorInsert");




//Coupon




Route::get("/addCouponPage", [couponController::class, "addCouponPage"])->name("addCouponPage");
Route::post("/addCouponPage/couponInsert", [couponController::class, "couponInsert"])->name("couponInsert");




//Product Tracking Section
Route::get("/statusUpdatePage", [productTrackingController::class, "statusUpdatePage"])->name("statusUpdatePage");
Route::post("/statusChange", [productTrackingController::class, "statusChange"])->name("statusChange");
Route::get("/downloadInvoice/{orders_id}", [productTrackingController::class, "downloadInvoice"])->name("downloadInvoice");
















//Customer Login Section


Route::get("/customer/login/registration",[customerLoginRegController::class,"customerLoginRegPage"])->name("customerLoginRegPage");
Route::post("/customerRegistration",[customerLoginRegController::class,"customerRegistration"])->name("customerRegistration");
Route::post("/customerLogin",[customerLoginRegController::class,"customerLogin"])->name("customerLogin");
Route::get("/customerLogout",[customerLoginRegController::class,"customerLogout"])->name("customerLogout");

//customer profile
Route::get("/customerProfile", [customerProfileController::class, "customerProfile"])->name("customerProfile");
Route::post("/customerProfile/customerProfileUpdate", [customerProfileController::class, "customerProfileUpdate"])->name("customerProfileUpdate");
Route::get("/customerProfile/customerOrderPage", [customerProfileController::class, "customerOrderPage"])->name("customerOrderPage");






//Cart Section

Route::post("/cartInsert",[cartController::class, "cartInsert"])->name("cartInsert");
Route::get("/cartItemDelete/{cartItemDeleteId}",[cartController::class, "cartItemDelete"])->name("cartItemDelete");
Route::get("/AllcartItemDelete",[cartController::class, "AllcartItemDelete"])->name("AllcartItemDelete");
Route::get("/cartPage",[cartController::class, "cartPage"])->name("cartPage");
Route::post("/cartPage/cartUpdate",[cartController::class, "cartUpdate"])->name("cartUpdate");
// Route::get("/couponEnter",[cartController::class, "couponEnter"])->name("couponEnter");



//Wishlist Section
Route::get("/wishlistitemDelete/{wishlistitemDeleteId}", [cartController::class, "wishlistitemDelete"])->name("wishlistitemDelete");
Route::get("/customerWishlistPage}", [customerProfileController::class, "customerWishlistPage"])->name("customerWishlistPage");





//Checkout page

Route::get("/checkoutPage", [checkoutController::class, "checkoutPage"])->name("checkoutPage");
Route::post("/ajaxGetCity", [checkoutController::class, "ajaxGetCity"]);
Route::post("/checkoutFormInsert", [checkoutController::class, "checkoutFormInsert"])->name("checkoutFormInsert");


Route::get("/checkoutPage/orderSuccessRoute", [checkoutController::class, "orderSuccessRoute"])->name("orderSuccessRoute");
// Route::get("/checkoutPage/orderSuccessPage", [checkoutController::class, "orderSuccessPage"])->name("orderSuccessPage");




// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::get('/pay', [SslCommerzPaymentController::class, 'index'])->name("pay");
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


//Stripe

Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe')->name("stripe");
    Route::post('stripe', 'stripePost')->name('stripe.post');
});