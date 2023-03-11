<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\RegistationController;
use  App\Http\Controllers\frontend\UserProfile;
use  App\Http\Controllers\frontend\UpdatepasswordController;
use  App\Http\Controllers\frontend\LeaveapplyController;
use  App\Http\Controllers\frontend\NotificationController;
use  App\Http\Controllers\frontend\LeaveapplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//login
Route::get('/',[LoginController::class,'userlogin'])->name('user.login');
Route::post('/',[LoginController::class,'loginauth'])->name('user.login.auth');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');

//update password controller
Route::post('/update/password',[UpdatepasswordController::class,'updatepassword'])->name('password.update');

//user profile
Route::get('/profile/{id}',[UserProfile::class,'showprofile'])->name('profile.show');

//leave apply
Route::post('/leave_apply',[LeaveapplyController::class,'storeleave'])->name('leave.store');


//leave-application
Route::post('/leave-application',[LeaveapplicationController::class,'showapplication'])->name('application.show');









