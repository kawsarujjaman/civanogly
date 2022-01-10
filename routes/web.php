<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;

use App\Http\Controllers\Admin\PageController;
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
    Route::get('/', [HomeController::class, 'home'] )->name('home');

    Route::get('/property/{id}', [PropertyController::class, 'single_property'] )->name('single_property');

    Route::get('/properties', [PropertyController::class, 'index'] )->name('properties');

    Route::get('/page/{slug}', [HomeController::class, 'single'] )->name('page');


    Route::post('/property-inquiry/{id}', [ContactController::class, 'propertyInquiry'] )->name('property-inquiry');

    Route::get('/currency/{code}', [HomeController::class, 'currencyChange'] )->name('currency-change');

	
});






// Admin route

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[ DashboardController::class, 'index'])->name('dashboard-index');


    Route::get('/admin/properties',[ DashboardController::class, 'properties'])->name('dashboard-properties');    


    Route::get('/admin/add-property',[ DashboardController::class, 'addProperty'])->name('add-property');
    
    Route::get('/admin/property/add',[ DashboardController::class, 'addProperty'])->name('add-property');

    Route::post('/admin/create-property',[ DashboardController::class, 'createProperty'])->name('create-property');

    Route::post('/admin/update-property/{id}',[ DashboardController::class, 'updateProperty'])->name('update-property');

    Route::post('/admin/delete-property/{id}',[ DashboardController::class, 'deleteProperty'])->name('delete-property');

    Route::get('/admin/edit-property/{id}',[ DashboardController::class, 'editProperty'])->name('edit-property');

    Route::post('/admin/delete-media/{media_id}',[ DashboardController::class, 'deleteMedia'])->name('delete-media');

    Route::get('/admin/locations',[ DashboardController::class, 'locations'])->name('dashboard-locations');

    Route::get('/admin/add-location',[ DashboardController::class, 'addLocation'])->name('add-location');
    Route::post('/admin/create-location',[ DashboardController::class, 'createLocation'])->name('create-location');
    Route::post('/admin/update-location/{id}',[ DashboardController::class, 'updateLocation'])->name('update-location');
    Route::post('/admin/delete-location/{id}',[ DashboardController::class, 'deleteLocation'])->name('delete-location');
    Route::get('/admin/edit-location/{id}',[ DashboardController::class, 'editLocation'])->name('edit-location');

    Route::resource('dashboard-page', PageController::class);

    // Route::get('/admin/pages',[ DashboardController::class, 'pages'])->name('dashboard-pages');
    // Route::get('/admin/add-page',[ DashboardController::class, 'addPage'])->name('add-page');
    // Route::post('/admin/create-page',[ DashboardController::class, 'createPage'])->name('create-page');
    // Route::post('/admin/update-page/{id}',[ DashboardController::class, 'updatePage'])->name('update-page');
    // Route::post('/admin/delete-page/{id}',[ DashboardController::class, 'deletePage'])->name('delete-page');
    // Route::get('/admin/edit-page/{id}',[ DashboardController::class, 'editPages'])->name('edit-page');

    Route::get('/admin/users',[ DashboardController::class, 'users'])->name('dashboard-users');
    Route::get('/admin/add-user',[ DashboardController::class, 'addUser'])->name('add-user');
    Route::post('/admin/create-user',[ DashboardController::class, 'createUser'])->name('create-user');
    Route::post('/admin/update-user/{id}',[ DashboardController::class, 'updateUser'])->name('update-user');
    Route::post('/admin/delete-user/{id}',[ DashboardController::class, 'deleteUser'])->name('delete-user');
    Route::get('/admin/edit-user/{id}',[ DashboardController::class, 'editUser'])->name('edit-user');

    Route::get('/admin/messages',[ DashboardController::class, 'messages'])->name('dashboard-messages');
    Route::get('/admin/add-message',[ DashboardController::class, 'addMessage'])->name('add-message');
    Route::post('/admin/create-message',[ DashboardController::class, 'createMessage'])->name('create-message');
    Route::post('/admin/update-message/{id}',[ DashboardController::class, 'updateMessage'])->name('update-message');
    Route::post('/admin/delete-message/{id}',[ DashboardController::class, 'deleteMessage'])->name('delete-message');
    Route::get('/admin/edit-message/{id}',[ DashboardController::class, 'editMessage'])->name('edit-message');



    });


require __DIR__.'/auth.php';
