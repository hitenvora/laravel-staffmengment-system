<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\StudentHomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AddFacultyController;
use App\Http\Controllers\admin\AddCollgeController;
use App\Http\Controllers\admin\AddDepartmentController;
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

// routing loading about view 

// Route::get('/', function(){
 
//      return view('about');

// });
// Route::get('/portfolio-us', function(){
 
//     return view('portfolio');

// });

// Route::get('/contact-us', function(){
 
//     return view('contact');

// });

// Route::get('/contact-us',[ContactUsController::class,'index']);
// Route::post('/contact-us',[ContactUsController::class,'store']);

// student attendance management systems routing
Route::get("/",[StudentHomeController::class,'index']);
Route::get("/create-account",[RegisterController::class,'index']);
Route::get("/about-us",function(){

    return view('about');
});
Route::get("/contact-us",[ContactUsController::class,'index']);
Route::post("/contact-us",[ContactUsController::class,'store']);

// admin panel routing
Route::get("/admin-login",[AdminLoginController::class,'index']);
Route::get("/admin-login/admin-dashboard",[AdminDashboardController::class,'index']);
Route::get("/admin-login/managecontacts",[ContactUsController::class,'show']);
Route::get("/admin-login/managecontacts/{id}",[ContactUsController::class,'destroy']);
// add college
Route::get("/admin-login/addcollege",[AddCollgeController::class,'index']);
Route::post("/admin-login/addcollege",[AddCollgeController::class,'store']);
Route::get("/admin-login/managecollege",[AddCollgeController::class,'show']);
Route::get("/admin-login/managecollege/{id}",[AddCollgeController::class,'destroy']);
Route::get("/admin-login/editcollege/{id}",[AddCollgeController::class,'edit']);
Route::post("/admin-login/editcollege/{id}",[AddCollgeController::class,'update']);
// add faculty
Route::get("/admin-login/addfaculty",[AddFacultyController::class,'index']);
Route::post("/admin-login/addfaculty",[AddFacultyController::class,'store']);
Route::get("/admin-login/managefaculty",[AddFacultyController::class,'show']);
Route::get("/admin-login/managefaculty/{id}",[AddFacultyController::class,'destroy']);
Route::get("/admin-login/editfaculty/{id}",[AddFacultyController::class,'edit']);
Route::post("/admin-login/editfaculty/{id}",[AddFacultyController::class,'update']);
// add department
Route::get("/admin-login/adddepartment",[AddDepartmentController::class,'index']);
Route::post("/admin-login/adddepartment",[AddDepartmentController::class,'store']);
Route::get("/admin-login/managedepartment",[AddDepartmentController::class,'show']);
Route::get("/admin-login/managedepartment/{id}",[AddDepartmentController::class,'destroy']);
Route::get("/admin-login/editdepartment/{id}",[AddDepartmentController::class,'edit']);
Route::post("/admin-login/editdepartment/{id}",[AddDepartmentController::class,'update']);