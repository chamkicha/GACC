<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Authentication\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('system', [AuthenticationController::class,'signin'])->name('login');
Route::post('login', [AuthenticationController::class,'login']);


// Route::group([], function () {
Route::middleware('auth')->group( function () {
    
    Route::controller(AuthenticationController::class)->group(function (){
        Route::get('logout', 'logout');
    });
    
    Route::controller(DashboardController::class)->group(function (){
        Route::get('dashboard', 'dashboard')->name('dashboard');
    });
    
    Route::controller(MembersController::class)->group(function (){
        Route::get('members', 'index')->name('members.index');
    });
    
    Route::controller(Controller::class)->group(function (){
        Route::post('subscription', 'subscription')->name('subscription.store');
    });
});


Route::get('/', [Controller::class, 'welcome'])->name('welcome');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/events', [Controller::class, 'events'])->name('events');
Route::get('/gallery', [Controller::class, 'gallery'])->name('gallery');
Route::get('/contacts', [Controller::class, 'contacts'])->name('contacts');
Route::get('/donate', [Controller::class, 'donate'])->name('donate');
Route::get('/volunteer', [Controller::class, 'volunteer'])->name('volunteer');
