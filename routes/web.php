<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('login',[HomeController::class,'loginForm'])->name('login');
Route::get('sign/up',[HomeController::class,'signUpForm'])->name('sign.up');
Route::post('authenticate/user',[LoginController::class,'login'])->name('authenticate.user');
Route::post('register/user',[LoginController::class,'storeUser'])->name('register.user');
Route::get('countries/{id?}',[HomeController::class,'getCountries'])->name('countries');
Route::get('country/detail/{id}',[HomeController::class,'countryDetails'])->name('get.country');
Route::get('visa/application',[HomeController::class,'visaApplication'])->name('apply.visa');

Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('applications',[ApplicationController::class,'index'])->name('application.list');
    Route::get('application/create/{id?}',[ApplicationController::class,'create'])->name('application.create');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');

    /** website menu */
    Route::get('website/menu',[DashboardController::class,'websiteMenu'])->name('website.menu');
    Route::get('service/list',[ServiceController::class,'serviceList'])->name('service.list');
    Route::get('service/create',[ServiceController::class,'serviceCreate'])->name('service.create');
    Route::post('service/store',[ServiceController::class,'serviceStore'])->name('service.store');
    Route::get('testmonial/list',[ServiceController::class,'testmonialList'])->name('testmonial.list');
    Route::get('testmonial/create',[ServiceController::class,'testmonialCreate'])->name('testmonials.create');
    Route::post('testmonial/store',[ServiceController::class,'testmonialStore'])->name('testmonial.store');
    Route::get('brand/list',[ServiceController::class,'brandList'])->name('brand.list');
    Route::get('brand/create',[ServiceController::class,'brandCreate'])->name('brand.create');
    Route::post('brand/store',[ServiceController::class,'brandStore'])->name('brand.store');
    Route::get('faq/list',[ServiceController::class,'faqList'])->name('faq.list');
    Route::get('faq/create',[ServiceController::class,'faqCreate'])->name('faq.create');
    Route::post('faq/store',[ServiceController::class,'faqStore'])->name('faq.store');
    Route::get('countries/list',[ServiceController::class,'countriesList'])->name('countries.list');
    Route::get('countries/create',[ServiceController::class,'countrierCreate'])->name('country.create');
    Route::post('country/store',[ServiceController::class,'countrierStore'])->name('country.store');
    Route::get('client/list',[ServiceController::class,'clientList'])->name('client.list');
    Route::get('client/create',[ServiceController::class,'clientCreate'])->name('client.create');
    Route::post('client/store',[ServiceController::class,'clientStore'])->name('client.store');

    /** Visa Application */
    Route::post('usa/visa/store',[ApplicationController::class,'usaVisaStore'])->name('usa.visa.store');
    Route::post('schengen/visa/store',[ApplicationController::class,'SchengenVisaStore'])->name('schengen.visa.store');
    Route::get('payment/profile/{id?}/{type?}',[ApplicationController::class,'paymentProfile'])->name('payment.profile');
    Route::get('process/payment/{personal_id?}/{type?}',[ApplicationController::class,'processPayment'])->name('process.payment');

    /**user management */
    Route::get('users/list',[UserController::class,'index'])->name('users.index');
    Route::post('users/store',[UserController::class,'store'])->name('user.store');
    
});
