<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TrainersController;
use App\Models\Trainers;
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

Route::get('/companies',[CompaniesController::class,'index']);
Route::get('/trainers',[TrainersController::class,'index']);
Route::get('/search',[SearchController::class,'search'])->name('search');
Route::get('/categories',[CategoriesController::class,'index'])->name('categories');
Route::get('/categories/{name}',[CategoriesController::class,'detail'])->where('name','([A-za-z0-9])+');
Route::get('/search-companies',[SearchController::class,'searchCompanies'])->name('searchCompanies');