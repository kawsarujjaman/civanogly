<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', [HomeController::class, 'home'] )->name(name: 'home');

    Route::get('/property/{id}', [PropertyController::class, 'single_property'] )->name(name: 'single_property');

    Route::get('/properties', [PropertyController::class, 'index'] )->name(name: 'properties');

    Route::get('/page/{slug}', [PageController::class, 'single'] )->name(name: 'page');

    Route::post('/property-inquiry/{id}', [ContactController::class, 'propertyInquiry'] )->name(name: 'property-inquiry');
	
});






// Admin route

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[ DashboardController::class, 'index'])->name('dashboard-index');
    Route::get('/admin/properties',[ DashboardController::class, 'properties'])->name('dashboard-properties');
    Route::get('/admin/add-property',[ DashboardController::class, 'addProperty'])->name('add-property');

    });


require __DIR__.'/auth.php';
