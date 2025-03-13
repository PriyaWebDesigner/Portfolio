<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\backend\EducationController;
use App\Http\Controllers\Backend\InterestController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\skillController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Frontend Url
Route::get('/',[FrontendController::class,'index']);

Auth::routes();

//Admin Login Url
Route::get('/admin/login', [AuthController::class, 'adminLogin'])->name('adminLogin');

//Admin Pannel
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');

// Education Routes
Route::get('/admin/create-education', [EducationController::class, 'create'])->name('education.create');
Route::post('/admin/store-education', [EducationController::class, 'store'])->name('education.store');
Route::get('/admin/show-education', [EducationController::class, 'show'])->name('education.show');
Route::get('/admin/delete-education/{id}', [EducationController::class, 'delete'])->name('education.delete');
Route::get('/admin/edit/education/{id}', [EducationController::class, 'edit'])->name('education.edit');
Route::post('/admin/update/education/{id}', [EducationController::class, 'update'])->name('education.update');

//Service Routes...
    Route::get('/admin/create-service',[ServiceController::class, 'serviceCreate']);
    Route::post('/admin/store-service',[ServiceController::class, 'serviceStore']);
    Route::get('/admin/show-service',[ServiceController::class, 'serviceShow']);
    Route::get('/admin/delete-service/{id}',[ServiceController::class, 'serviceDelete']);
    Route::get('admin/edit-service/{id}',[ServiceController::class, 'serviceEdit']);
    Route::post('admin/update-service/{id}',[ServiceController::class, 'serviceUpdate']);

//Skills Routes...
Route::get('/admin/create-skill',[skillController::class, 'skillCreate']);
Route::post('/admin/store-skill',[skillController::class, 'skillStore']);
Route::get('/admin/show-skill',[skillController::class, 'skillShow']);
Route::get('/admin/delete-skill/{id}',[skillController::class, 'skillDelete']);
Route::get('/admin/edit-skill/{id}',[skillController::class, 'skillEdit']);
Route::post('/admin/update-skill/{id}',[skillController::class, 'skillUpdate']);

//Interest Routes...
Route::get('/admin/create-interest',[InterestController::class, 'interestCreate']);
Route::post('/admin/store-interest',[InterestController::class, 'interestStore']);
Route::get('/admin/show-interest',[InterestController::class, 'interestShow']);
Route::get('/admin/delete-interest/{id}',[InterestController::class, 'interestDelete']);
Route::get('/admin/edit-interest/{id}',[InterestController::class, 'interestEdit']);
Route::post('/admin/update-interest/{id}',[InterestController::class, 'interestUpdate']);

//Contact Routes...
Route::post('/admin/store/contact-message',[MessageController::class, 'contactMessageStore']);
Route::get('/admin/show/contact-message',[MessageController::class, 'contactMessageShow']);
Route::get('/admin/delete/contact-message/{id}',[MessageController::class, 'contactMessageDelete']);

//Site Setting, Hero, About
Route::get('/admin/site-settings',[SiteSettingController::class, 'showSettings']);
Route::post('/admin/site-settings/update',[SiteSettingController::class, 'updateSettings']);

Route::get('/admin/hero',[SiteSettingController::class,'showhero']);
Route::post('/admin/update/hero',[SiteSettingController::class,'updatehero']);

Route::get('/admin/about-us',[SiteSettingController::class,'showAboutUs']);
Route::post('/admin/update/about-us',[SiteSettingController::class,'updateAboutUs']);

Route::get('/admin/work-interest',[SiteSettingController::class,'showWorkInterest']);
Route::post('/admin/update/work-interest',[SiteSettingController::class,'updateWorkInterest']);

