<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\PatientAccController;
use App\Http\Controllers\PatMedicineController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PatOrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;


//without login

Route::get('/home', [HomeController::class, 'homePage']);
Route::get('/shop', [HomeController::class, 'shopPage']);
Route::get('/about', [HomeController::class, 'aboutPage']);
Route::get('/cart', [HomeController::class, 'cartPage']);;



//login routes
Route::get('/loginView', [LoginController::class,'loginView']);
Route::post('/login', [LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/deleteAccount',[LoginController::class,'deleteAccount']);


//register route

Route::get('/registerView', [RegisterController::class,'regisView']);
Route::post('/register', [RegisterController::class,'register']);


// Admin routes 
Route::get('/adminHome', [DashboardController::class,'adminHome']);
Route::get('/adminAbout', [DashboardController::class,'adminAbout']);
Route::get('/adminMsg', [DashboardController::class,'adminMessage']);
Route::get('/adminAccount', [DashboardController::class,'accountInfo']);
Route::get('/adminEdit{id}', [DashboardController::class,'adminEditView']);
Route::post('/adminEditSub', [DashboardController::class,'adminEdit']);
Route::get('/chnPass',[DashboardController::class,'chnPass']);
Route::post('/chnPassSub',[DashboardController::class,'chnPassSub']);


//admin user control
Route::get('/userInfo', [UserController::class,'userInfo']);
Route::get('/block{id}',[UserController::class,'block_user']);
Route::get('/unblock{id}',[UserController::class,'unblock_user']);
Route::get('/userOrder{id}',[UserController::class,'userOrder']);


//admin products
Route::get('/adminSup', [MedicineController::class,'supView']);
Route::get('/adminSupVit', [MedicineController::class,'vitView']);
Route::get('/adminSupMin', [MedicineController::class,'minView']);
Route::get('/adminSupHer', [MedicineController::class,'herView']);
Route::get('/adminSupPro', [MedicineController::class,'proView']);
Route::get('/adminSupProbio', [MedicineController::class,'probioView']);
Route::get('/adminSupImu', [MedicineController::class,'imuView']);
Route::get('/addProduct', [MedicineController::class,'addProView']);
Route::post('/addProSub', [MedicineController::class,'addProSub']);
Route::get('/med_delete{id}{cat}',[MedicineController::class,'medDelete']);
Route::get('/editProuct{id}{cat}',[MedicineController::class,'editProView']);
Route::post('/editProuct',[MedicineController::class,'editProSub']);


// admin order
Route::get('/orderPending',[OrderController::class,'orderPendingView']);
Route::get('/approve{id}',[OrderController::class,'penToApp']);
Route::get('/orderApprove',[OrderController::class,'orderApproveView']);
Route::get('/deliver{id}',[OrderController::class,'appToDel']);
Route::get('/orderDeliver',[OrderController::class,'orderDeliverView']);
Route::get('/orderCancel',[OrderController::class,'orderCancelView']);


//Patient routes
Route::get('/patHome', [PatientProfileController::class,'patHomeView']);
Route::get('/patAbout', [PatientProfileController::class,'patAboutView']);
Route::get('/contact', [PatientProfileController::class, 'contactPage']);
Route::post('/contactsub', [PatientProfileController::class, 'contact']);

//Patient Account
Route::get('/patAccount', [PatientAccController::class,'accountInfo']);
Route::get('/patEdit', [PatientAccController::class,'patEditView']);
Route::post('/patEditSub', [PatientAccController::class,'patEdit']);
Route::get('/patChnPass',[PatientAccController::class,'chnPass']);
Route::post('/patChnPassSub',[PatientAccController::class,'chnPassSub']);


//Patient medicine
Route::get('/patMedView', [PatMedicineController::class,'patStore']);
Route::get('/patMedVit', [PatMedicineController::class,'patStoreVit']);
Route::get('/patMedMin', [PatMedicineController::class,'patStoreMin']);
Route::get('/patMedHer', [PatMedicineController::class,'patStoreHer']);
Route::get('/patMedPro', [PatMedicineController::class,'patStorePro']);
Route::get('/patMedProbio', [PatMedicineController::class,'patStoreProbio']);
Route::get('/patMedImu', [PatMedicineController::class,'patStoreImu']);


//cart
Route::get('/patMedSingle{id}',[CartController::class,'patStoreSingle']);
Route::post('/patCartView', [CartController::class,'patCart']);
Route::get('/cart',[CartController::class,'cartView']);
Route::get('/removeCart{id}',[CartController::class,'cartRemove']);

// patient order
Route::get('/order',[PatOrderController::class,'orderView']);
Route::get('/calcel{id}',[PatOrderController::class,'calOrder']);

//checkout
Route::get('/checkout',[CheckoutController::class,'checkoutView']);
Route::post('/checkoutDone',[CheckoutController::class,'checkoutSub']);
Route::get('/thankYou',[CheckoutController::class,'orderPlaced']);


