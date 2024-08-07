<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('login',[HomeController::class,'loginForm'])->name('login');
Route::post('authenticate/user',[LoginController::class,'login'])->name('authenticate.user');

Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('applications',[ApplicationController::class,'index'])->name('application.list');
    Route::get('application/create',[ApplicationController::class,'create'])->name('application.create');
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
});
