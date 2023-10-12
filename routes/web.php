<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CareersController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\job1Controller;
use App\Http\Controllers\admin\Job2Controller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[AdminLoginController::class,'index'])->name('admin.login');
Route::get('/about',[AboutController::class,'index'])->name('admin.about');
Route::get('/products',[ProductsController::class,'index'])->name('admin.products');
Route::get('/services',[ServicesController::class,'index'])->name('admin.services');
Route::get('/blogs',[BlogController::class,'index'])->name('admin.Blogs');
Route::get('/careers',[CareersController::class,'index'])->name('admin.careers');
Route::get('/contact',[ContactController::class,'index'])->name('admin.Contact');
Route::get('/job1',[Job1Controller::class,'index'])->name('admin.jobs');
Route::get('/job2',[Job2Controller::class,'index'])->name('admin.jobs');



