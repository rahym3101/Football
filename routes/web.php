<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
//require __DIR__.'/auth.php';

Route::controller(HomeController::class)
    ->group(function (){
        Route::get('','index')->name('home');
        Route::get('/locale/{locale}', 'locale')->name('locale')->whereIn('locale', ['tm', 'en']);
    });

Route::controller(ClubController::class)
    ->prefix('clubs')
    ->name('clubs.')
    ->group(function (){
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
    });