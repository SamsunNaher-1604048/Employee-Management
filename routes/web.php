<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\DrpatmentController;

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

// dashboard route
Route::get('/',[DashboardController::class,'showdashboard'])->name('dashboard.show');


//employee route
Route::get('/create/employee',[EmployeeController::class,'createmployee'])->name('employee.create');
Route::post('/store/employee',[EmployeeController::class,'stortemployee'])->name('employee.store');
Route::get('/show/employee',[EmployeeController::class,'showemployee'])->name('employee.show');
Route::get('/edit/employee/{id}',[EmployeeController::class,'editemployee'])->name('employee.edit');
Route::post('/update/employee/{id}',[EmployeeController::class,'updatemployee'])->name('employee.update');



//company
Route::get('/create/company',[CompanyController::class,'createcompany'])->name('company.create');
Route::post('/store/company',[CompanyController::class,'storecompany'])->name('company.store');
Route::get('/show/company',[CompanyController::class,'showcompany'])->name('company.show');
Route::get('/edit/company/{id}',[CompanyController::class,'editcompany'])->name('company.edit');
Route::post('/update/conpany/{id}',[CompanyController::class,'updatecompany'])->name('company.update');



// Department route
Route::get('/create/department',[DrpatmentController::class,'createdepartment'])->name('department.create');
Route::post('/store/department',[DrpatmentController::class,'storedepartment'])->name('department.store');
Route::get('/show/department',[DrpatmentController::class,'showdepartment'])->name('department.show');
Route::get('/edit/department/{id}',[DrpatmentController::class,'editdepartment'])->name('department.edit');
Route::post('/update/department/{id}',[DrpatmentController::class,'updatedepartment'])->name('department.update');
