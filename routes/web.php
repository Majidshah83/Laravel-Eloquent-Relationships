<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\MehanicController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
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

//many to many realtionship

Route::get('store-singer-song',[SingerController::class ,'store'])->name('store-singer-song');
Route::get('storeSong',[SongController::class ,'storeSong'])->name('storeSong');
Route::get('show_song/{id}',[SongController::class ,'show_song'])->name('show_song');
Route::get('show_singer/{id}',[SingerController::class ,'show_singer'])->name('show_singer');
Route::get('index-singer',[SingerController::class ,'index'])->name('index-singer');

//Hasthrough Realtionship
Route::get('add-owner',[OwnerController::class ,'add_owner'])->name('add-owner');
Route::get('add-mehanic',[MehanicController::class ,'add_mehanic'])->name('
add-mehanic');
Route::get('add-car/{id}',[CarController::class ,'addCar'])->name('
add-car');

Route::get('addowner/{id}',[OwnerController::class ,'addowner'])->name('addowner');
Route::get('ownerget/{id}',[OwnerController::class ,'ownerget'])->name('ownerget');
   