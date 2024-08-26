<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\VisaManagementController;
use App\Http\Controllers\Frontend\CustomerController;
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
Route::get('country/detail/{uuid}',[HomeController::class,'countryDetails'])->name('get.country');
Route::get('visa/application',[HomeController::class,'visaApplication'])->name('apply.visa');
Route::get('all/pricing/plans',[HomeController::class,'pricingPlan'])->name('all.payment.plans');
Route::get('success/stories',[HomeController::class,'testimonials'])->name('testimonials');
Route::get('list/of/faq',[HomeController::class,'faq'])->name('faq');
Route::get('additional/services',[HomeController::class,'additionalServices'])->name('additional.service');
Route::get('get/service/{uuid}',[HomeController::class,'getService'])->name('service.detail');
Route::get('about/us',[HomeController::class,'aboutUs'])->name('about.us');
Route::get('visa/request',[HomeController::class,'visaRequest'])->name('visa.request');
Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
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
    Route::get('countries/all/list',[ServiceController::class,'countriesList'])->name('countries.list');
    Route::get('create/country',[ServiceController::class,'countrierCreate'])->name('country.create');
    Route::post('country/store',[ServiceController::class,'countrierStore'])->name('country.store');
    Route::get('client/list',[ServiceController::class,'clientList'])->name('client.list');
    Route::get('client/create',[ServiceController::class,'clientCreate'])->name('client.create');
    Route::post('client/store',[ServiceController::class,'clientStore'])->name('client.store');
    Route::get('pricing/list',[ServiceController::class,'pricingList'])->name('pricing.list');
    Route::post('pricing/store',[ServiceController::class,'pricingStore'])->name('plan.store');
    Route::get('edit/country/{uuid}',[ServiceController::class,'editCountry'])->name('edit.country');
    Route::post('edit/country/detail',[ServiceController::class,'updateCountry'])->name('country.edit.detail');
    Route::post('country/destroy',[ServiceController::class,'countryDestroy'])->name('country.destroy');
    Route::post('service/destroy',[ServiceController::class,'serviceDestroy'])->name('service.destroy');
    Route::get('edit/service/{uuid}',[ServiceController::class,'editService'])->name('edit.service');
    Route::post('update/service',[ServiceController::class,'updateService'])->name('service.update');
    Route::post('testmonial/destroy',[ServiceController::class,'testmonialDestroy'])->name('testmonial.destroy');
    Route::get('edit/testmonial/{uuid}',[ServiceController::class,'editTestmonial'])->name('edit.testmonial');
    Route::post('update/testmonial',[ServiceController::class,'updateTestmonial'])->name('testmonial.update');
    Route::get('edit/faq/{uuid}',[ServiceController::class,'editFaq'])->name('edit.faq');
    Route::post('update/faq',[ServiceController::class,'updateFaq'])->name('faq.update');
    Route::post('destroy/faq',[ServiceController::class,'destroyFaq'])->name('faq.destroy');
    Route::post('destroy/brand',[ServiceController::class,'destroyBrand'])->name('brand.destroy');

    /** Visa Application */
    Route::get('payment/profile/{id?}/{type?}',[ApplicationController::class,'paymentProfile'])->name('payment.profile');
    Route::get('process/payment/{personal_id?}/{type?}',[ApplicationController::class,'processPayment'])->name('process.payment');
    Route::get('visa/profile/{uuid}',[ApplicationController::class,'visaProfile'])->name('visa.profile');
    Route::post('visa/allocation',[ApplicationController::class,'visaAllocation'])->name('allocate.application');
    Route::post('track/store',[ApplicationController::class,'trackStore'])->name('track.store');

    /**user management */
    Route::get('users/list',[UserController::class,'index'])->name('users.index');
    Route::post('users/store',[UserController::class,'store'])->name('user.store');

    /** Visa Management */
    Route::get('visa/types',[VisaManagementController::class,'index'])->name('visa.types');  
    Route::post('visa/type/store',[VisaManagementController::class,'visaStore'])->name('visa.type.store');  
    Route::get('question/list/{id}',[VisaManagementController::class,'questionList'])->name('question.index');  
    Route::get('question/create',[VisaManagementController::class,'questionCreate'])->name('questions.create');  
    Route::post('question/store',[VisaManagementController::class,'questionStore'])->name('question.store');
    Route::post('visa/type/update',[VisaManagementController::class,'visaTypeUpdate'])->name('visa.type.update');
    Route::post('visa/type/destroy',[VisaManagementController::class,'visaTypeDestroy'])->name('visa.type.destroy');
    Route::post('question/update',[VisaManagementController::class,'questionUpdate'])->name('question.update');
    Route::post('question/destroy',[VisaManagementController::class,'questionDestroy'])->name('question.destroy');
    Route::get('paid/services',[VisaManagementController::class,'paidService'])->name('paid.service');
    Route::post('paid/service/stroe',[VisaManagementController::class,'paidServiceStore'])->name('paid.service.store');
    Route::post('paid/service/update',[VisaManagementController::class,'paidServiceUpdate'])->name('paid.service.update');
    Route::post('paid/service/destroy',[VisaManagementController::class,'paidServiceDestroy'])->name('paid.service.destroy');
    Route::get('paid/service/plan/{id}',[VisaManagementController::class,'paidServicePlan'])->name('paid.service.plan.index');
    Route::post('paid/service/plan/store',[VisaManagementController::class,'paidServicePlanStore'])->name('paid.service.plan.store');
    Route::post('paid/service/plan/update',[VisaManagementController::class,'paidServicePlanUpdate'])->name('paid.service.plan.update');
    Route::post('paid/service/plan/destroy',[VisaManagementController::class,'paidServicePlanDestroy'])->name('paid.service.plan.destroy');
    Route::get('paid/service/question/{uuid}',[VisaManagementController::class,'paidServicePlanQuestions'])->name('paid.service.questions.index');
    Route::post('service/question/store',[VisaManagementController::class,'serviceQuestionStore'])->name('service.question.store');
    Route::post('service/question/update',[VisaManagementController::class,'serviceQuestionUpdate'])->name('service.question.update');
    Route::post('service/question/destroy',[VisaManagementController::class,'serviceQuestionDestroy'])->name('service.question.destroy');
    
    Route::get('all/visa/application',[ApplicationController::class,'visaApplication'])->name('application.list.index');
    Route::post('visa/store',[ApplicationController::class,'visaStore'])->name('visa.store');


    /** Customer */
    Route::get('customer.dashboard',[CustomerController::class,'index'])->name('customer.dashboard');
});
