<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/password-change',[HomeController::class,'pass_change'])->name('password_change');
Route::post('/password-update',[HomeController::class,'pass_update'])->name('password_update');

//___Catgeory route
Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

//___Subcategory route
Route::group(['prefix'=>'subcategory'], function(){
    Route::get('/index',[SubcategoryController::class,'index'])->name('subcategory.index');
    Route::get('/create',[SubcategoryController::class,'create'])->name('subcategory.create');
    Route::post('/store',[SubcategoryController::class,'store'])->name('subcategory.store');
    Route::get('/edit/{id}',[SubcategoryController::class,'edit'])->name('subcategory.edit');
    Route::post('/update/{id}',[SubcategoryController::class,'update'])->name('subcategory.update');
});
