<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//one to one realtionship
Route::get('add_customer',[CustomerController::class ,'add_customer'])->name('add_customer');
Route::get('show_mobile/{id}',[CustomerController::class ,'show_mobile'])->name('show_mobile');
Route::get('show_customer/{id}',[MobileController::class ,'show_customer'])->name('show_customer');
Route::get('index',[IndexController::class ,'index'])->name('index');
Route::get('show/{id}',[IndexController::class ,'show'])->name('show');

//one to manhy realtionship
Route::get('store',[AuthorController::class ,'store'])->name('store');
Route::get('add_post/{id}',[PostController::class ,'add_post'])->name('add_post');
Route::get('showpost/{id}',[PostController::class ,'show_post'])->name('showpost');
Route::get('showindex',[AuthorController::class ,'index'])->name('showindex');
