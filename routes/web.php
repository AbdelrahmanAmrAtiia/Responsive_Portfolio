<?php

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

Route::resource('/', \App\Http\Controllers\PortfolioController::class);
Route::resource('/portfolio', \App\Http\Controllers\PortfolioController::class);

// admin Pages
Route::resource('/admin', \App\Http\Controllers\HomeController::class);
Route::resource('/about', \App\Http\Controllers\AboutController::class);
Route::resource('/skill', \App\Http\Controllers\SkillController::class);
Route::resource('/skillDetail', \App\Http\Controllers\SkillDetailsController::class);
Route::resource('/work', \App\Http\Controllers\WorkController::class);
Route::resource('/education', \App\Http\Controllers\EducationController::class);
Route::resource('/port', \App\Http\Controllers\PortfolioSectionController::class);
Route::resource('/contact', \App\Http\Controllers\ContactController::class);
Route::resource('/message', \App\Http\Controllers\MessageController::class);
Route::resource('/resume', \App\Http\Controllers\ResumeController::class);
Route::get('/download/{filename}',[App\Http\Controllers\ResumeController::class, 'getDownload'])->name('download');
