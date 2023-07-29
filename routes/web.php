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

Route::controller(HomeController::class)
    ->prefix('teams')
    ->name('teams.')
    ->group(function (){
        Route::get('','index')->name('home');
    });

//Route::controller(ClubController::class)
//    ->prefix('clubs')
//    ->name('clubs.')
//    ->group(function (){
//       Route::get('','index')->name('club');
//    });