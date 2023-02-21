<?php

use App\Http\Controllers\bloggerPostController;
use App\Http\Controllers\bloggerWebsiteController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\generalUserCommentController;
use App\Http\Controllers\generalUserController;
use App\Http\Controllers\generalUserPassResetController;
use App\Http\Controllers\generalUserProfileController;
use App\Http\Controllers\githubController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\likeDislikeController;
use App\Http\Controllers\newsletterController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userpasswordResetController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//user

Route::get("userListPage",[UserController::class, "userListPage"])->name("userListPage");
Route::get("userDelete/{userId}",[UserController::class, "userDelete"])->name("userDelete");
Route::post("deleteCheckedUsers",[UserController::class, "deleteCheckedUsers"])->name("deleteCheckedUsers");

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




Route::get("categoryWiseBlogPage/{cataId}", [categoryController::class, "categoryWiseBlogPage"])->name("categoryWiseBlogPage");





//Tag
Route::get("tagPage", [tagController::class, "tagPage"])->name("tagPage");
Route::post("tagInsert", [tagController::class, "tagInsert"])->name("tagInsert");


//Role
Route::get("rolePage", [roleController::class, "rolePage"])->name("rolePage");
Route::post("addPermission", [roleController::class, "addPermission"])->name("addPermission");
Route::post("addRole", [roleController::class, "addRole"])->name("addRole");
Route::post("assignRole", [roleController::class, "assignRole"])->name("assignRole");
Route::get("removeRole/{removeRoleid}", [roleController::class, "removeRole"])->name("removeRole");
Route::get("roleUpdatePage/{editRolePermissionid}", [roleController::class, "roleUpdatePage"])->name("roleUpdatePage");
Route::post("rolePermissionUpdate", [roleController::class, "rolePermissionUpdate"])->name("rolePermissionUpdate");







//Blogger Post Section

Route::get("addPostPage", [bloggerPostController::class, "addPostPage"])->name("addPostPage");
Route::post("bloggerPostInsert", [bloggerPostController::class, "bloggerPostInsert"])->name("bloggerPostInsert");
Route::get("myPostPage", [bloggerPostController::class, "myPostPage"])->name("myPostPage");
Route::get("myDeclinedPostPage", [bloggerPostController::class, "myDeclinedPostPage"])->name("myDeclinedPostPage");
Route::get("myPendingPostPage", [bloggerPostController::class, "myPendingPostPage"])->name("myPendingPostPage");
Route::get("myPostDelete/{delete_id}", [bloggerPostController::class, "myPostDelete"])->name("myPostDelete");
Route::get("myPostTrashBin", [bloggerPostController::class, "myPostTrashBin"])->name("myPostTrashBin");
Route::get("myPostRestore/{delete_id}", [bloggerPostController::class, "myPostRestore"])->name("myPostRestore");
Route::get("myPostParmanantDelete/{delete_id}", [bloggerPostController::class, "myPostParmanantDelete"])->name("myPostParmanantDelete");
Route::get("myPostUpdatePage/{update_id}", [bloggerPostController::class, "myPostUpdatePage"])->name("myPostUpdatePage");
Route::post("myPostUpdate", [bloggerPostController::class, "myPostUpdate"])->name("myPostUpdate");


Route::get("viewPostForApproved/{postid}", [bloggerPostController::class, "viewPostForApproved"])->name("viewPostForApproved");

Route::get("uploadedbloggerPostPage", [bloggerPostController::class, "uploadedbloggerPostPage"])->name("uploadedbloggerPostPage");
Route::post("uploadedbloggerPostStatus", [bloggerPostController::class, "uploadedbloggerPostStatus"])->name("uploadedbloggerPostStatus");



Route::get("authorPostDelete/{delete_id}", [bloggerPostController::class, "authorPostDelete"])->name("authorPostDelete");






//General User Section

Route::get("generalUserSignUpPage", [generalUserController::class, "generalUserSignUpPage"])->name("generalUserSignUpPage");
Route::get("generalUserSignInPage", [generalUserController::class, "generalUserSignInPage"])->name("generalUserSignInPage");
Route::post("generalUserInsert", [generalUserController::class, "generalUserInsert"])->name("generalUserInsert");
Route::post("generalUserLogin", [generalUserController::class, "generalUserLogin"])->name("generalUserLogin");
Route::get("generalUserLogout", [generalUserController::class, "generalUserLogout"])->name("generalUserLogout");
Route::get("generalUserList", [generalUserController::class, "generalUserList"])->name("generalUserList");











//Blogger Website Section
Route::get("/", [bloggerWebsiteController::class, "bloggerWebsitePage"])->name("homePage");


Route::get("bloggerDetailsPage/{blog_id}", [bloggerWebsiteController::class, "bloggerDetailsPage"])->name("bloggerDetailsPage");
Route::get("authorPage/{author_id}", [bloggerWebsiteController::class, "authorPage"])->name("authorPage");
Route::get("bloggerSiteblogPage", [bloggerWebsiteController::class, "bloggerSiteblogPage"])->name("bloggerSiteblogPage");
Route::get("bloggerSiteauthorPage", [bloggerWebsiteController::class, "bloggerSiteauthorPage"])->name("bloggerSiteauthorPage");





//Social login section

//Github

Route::get("/github/redirect",[githubController::class,"githubRedirect"])->name("githubRedirect");
Route::get("/github/callback",[githubController::class, "githubcallback"])->name("githubcallback");


//Google

Route::get("/google/redirect",[googleController::class,"googleRedirect"])->name("googleRedirect");
Route::get("/google/callback",[googleController::class, "googlecallback"])->name("googlecallback");




//GeneralUserPassword Reset Section
Route::get("/genUserpasswordResetReqPage", [generalUserPassResetController::class, "genUserpasswordResetReqPage"])->name("genUserpasswordResetReqPage");
Route::post("/generalUserPasswordResetSend", [generalUserPassResetController::class, "generalUserPasswordResetSend"])->name("generalUserPasswordResetSend");
Route::get("/genUserPassChangeForm/{tokenId}", [generalUserPassResetController::class, "genUserPassChangeForm"])->name("genUserPassChangeForm");
Route::post("/genUserPassChange", [generalUserPassResetController::class, "genUserPassChange"])->name("genUserPassChange");




//UserPassword Reset Section
Route::get("/UserpasswordResetReqPage", [userpasswordResetController::class, "UserpasswordResetReqPage"])->name("UserpasswordResetReqPage");
Route::post("/UserPasswordResetSend", [userpasswordResetController::class, "UserPasswordResetSend"])->name("UserPasswordResetSend");
Route::get("/UserPassChangeForm/{tokenId}", [userpasswordResetController::class, "UserPassChangeForm"])->name("UserPassChangeForm");
Route::post("/UserPassChange", [userpasswordResetController::class, "UserPassChange"])->name("UserPassChange");







//Comments
Route::post("commentsInsert", [generalUserCommentController::class, "commentsInsert"])->name("commentsInsert");




//search


Route::get("/searchpage", [searchController::class, "searchpage"])->name("searchpage");





//General user profile controller

Route::get("/profilePage", [generalUserProfileController::class, "profilePage"])->name("profilePage");
Route::get("/generalUserProfileEditPage", [generalUserProfileController::class, "generalUserProfileEditPage"])->name("generalUserProfileEditPage");

Route::post("generalUserInfoUpdate", [generalUserProfileController::class, "generalUserInfoUpdate"])->name("generalUserInfoUpdate");

Route::post("generalUserPassUpdate", [generalUserProfileController::class, "generalUserPassUpdate"])->name("generalUserPassUpdate");



//Like & Dislike

Route::post("likeCount", [likeDislikeController::class, "likeCount"])->name("likeCount");
Route::post("likeRemove", [likeDislikeController::class, "likeRemove"])->name("likeRemove");



//Newsletter

Route::get("/insertNewsletter", [newsletterController::class, "insertNewsletter"])->name("insertNewsletter");



















