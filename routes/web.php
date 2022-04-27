<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
    return view('index');
});
Route::get('company-register',[AuthController::class,'companyregisters'])->name('companyregisters');
Route::post('company-register',[AuthController::class,'companyregister'])->name('companyregister');
Route::get('famous-register',[AuthController::class,'famousregisters'])->name('famousregisters');
Route::post('famous-register',[AuthController::class,'famousregister'])->name('famousregister');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('index');
    Route::resource('companies',CompanyController::class);
});