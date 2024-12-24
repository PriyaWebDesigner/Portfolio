<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\backend\EducationController;
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

