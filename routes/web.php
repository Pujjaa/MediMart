<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\Admin\DashboardController;

//without login

Route::get('/home', [HomeController::class, 'homePage']);
Route::get('/shop', [HomeController::class, 'shopPage']);
Route::get('/about', [HomeController::class, 'aboutPage']);
Route::get('/contact', [HomeController::class, 'contactPage']);
Route::post('/contactsub', [HomeController::class, 'contact']);
Route::get('/cart', [HomeController::class, 'cartPage']);;


//login routes
Route::get('/loginView', [LoginController::class,'loginView']);
Route::post('/login', [LoginController::class,'login']);
Route::get('/userHome', [LoginController::class,'userHome']);

//register route

Route::get('/registerView', [RegisterController::class,'regisView']);
Route::post('/register', [RegisterController::class,'register']);



// Admin routes 
Route::get('/adminHome', [DashboardController::class,'adminHome']);
Route::get('/userInfo', [DashboardController::class,'userInfo']);
Route::get('/adminAccount', [DashboardController::class,'accountInfo']);
Route::get('/adminEdit{id}', [DashboardController::class,'adminEditView']);
Route::get('/adminEditSub', [DashboardController::class,'adminEdit']);

//Patient routes
Route::get('/patHome', [PatientProfileController::class,'patHome']);
// Route::get('/patHome', [PatientProfileController::class,'patHome']);



// use App\Http\Controllers\Admin\CompanyController;
// use App\Http\Controllers\Admin\CategoryController;
// use App\Http\Controllers\Admin\OrderController;
// use App\Http\Controllers\Admin\MedicineController;

