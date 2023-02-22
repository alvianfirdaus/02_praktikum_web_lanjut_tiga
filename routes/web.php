<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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
//1. route biasa Home
Route::get('/', [HomeController::class,'index']);

//2. route prefix product
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games',[ProductController::class, 'item1']);
    Route::get('/marbel-and-friends-kids-games',[ProductController::class, 'item2']);
    Route::get('/riri-story-books',[ProductController::class, 'item3']);
    Route::get('/kolak-kids-songs',[ProductController::class, 'item4']);
});

//3. route param news
Route::get('/news', [NewsController::class, 'news1']);
Route::get('/news/{id}', [NewsController::class, 'news2']);

//4. route prefix Program
Route::prefix('/program')->group(function () {
    Route::get('/karir',[ProgramController::class, 'program1']);
    Route::get('/magang',[ProgramController::class, 'program2']);
    Route::get('/kunjungan-industri',[ProgramController::class, 'program3']);
});
//5. route biasa About US
Route::get('/about', [AboutController::class,'about']);

//6. 
Route::get('/contact', [ContactController::class,'index']);
