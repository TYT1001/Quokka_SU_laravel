<?php

use Livewire\Livewire;
use App\Models\Category;
use App\Models\BlackList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User\UserBlackListController;
use App\Http\Controllers\BlackListController;

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

Route::get('/',[HomeController::class,'home'])->name('user#home');
Route::get('/nonCdmPage',[UserBlackListController::class,'nonCdmPage'])->name('user#nonCdmPage');
Route::get('/nonCdmList/{id}',[UserBlackListController::class,'details'])->name('user#nonCdmList');
Route::get('/post/details/{id}',[HomeController::class,'details'])->name('home#postdetails');


Route::get('/admin',[AdminController::class,'login'])->name('admin#login');
Route::middleware(['auth'])->group(function(){
    Route::prefix('/admin')->group(function(){
        Route::get('home',[AdminController::class,'home'])->name('admin#home');
        Route::get('posts',[AdminController::class,'posts'])->name('admin#posts');
        Route::get('categories',[CategoryController::class,'categories'])->name('admin#postCategories');
        Route::post('categories/create',[CategoryController::class,'create'])->name('admin#categoryCreate');
        Route::get('categories/delete/{id}',[CategoryController::class,'delete'])->name('admin#categoryDelete');
        Route::get('createPostPage',[AdminController::class,'createPostPage'])->name('admin#createPostPage');
        Route::get('updatePostPage/{id}',[AdminController::class,'updatePostPage'])->name('admin#updatePostPage');
        Route::post('posts/create',[AdminController::class,'create'])->name('admin#createPost');
        Route::get('posts/delete/{id}',[AdminController::class,'delete'])->name('admin#deletePost');
        Route::get('category/create/{query}',[CategoryController::class,'createCategory'])->name('admin#createCategory');
        Route::prefix('nonCdm')->group(function () {
        Route::get('/listPage', [BlackListController::class,'list'])->name('admin#nonCdmPage');
        Route::post('/create', [BlackListController::class,'create'])->name('admin#nonCdmCreate');
        Route::get('/updatePage/{id}', [BlackListController::class,'updatePage'])->name('admin#nonCdmUpdatePage');
        Route::post('/update', [BlackListController::class,'update'])->name('admin#nonCdmUpdate');
        Route::get('/delete/{id}', [BlackListController::class,'delete'])->name('admin#nonCdmDelete');
        });
        Route::prefix('university')->group(function () {
            Route::get('/listPage', [UniController::class,'list'])->name('admin#uniPage');
            Route::post('/create', [UniController::class,'create'])->name('admin#uniCreate');
            Route::post('/edit/{id}', [UniController::class,'edit'])->name('admin#uniEditPage');
            Route::get('/delete/{id}', [UniController::class,'delete'])->name('admin#uniDelete');
            });
    });

});

