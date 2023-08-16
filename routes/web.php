<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;
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
require __DIR__.'/auth.php';

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
        Route::post('/active', 'active')->name('active')->middleware('auth');
    });

Route::controller(PlayerController::class)
    ->prefix('players')
    ->name('players.')
    ->group(function(){
        Route::get('/{id}', 'show')->name('show')->where('id', '[A-Za-z0-9-]+');
    });

Route::controller(GameController::class)
    ->prefix('games')
    ->name('games.')
    ->group(function(){
        Route::get('/{id}', 'show')->name('show')->where('id', '[A-Za-z0-9-]+');
    });

Route::controller(CoachController::class)
    ->prefix('coaches')
    ->name('coaches.')
    ->group(function(){
        Route::get('/{id}', 'show')->name('show')->where('id', '[A-Za-z0-9-]+');
    });

Route::controller(PostController::class)
    ->prefix('posts')
    ->name('posts.')
    ->group(function(){
        Route::get('/{id}', 'show')->name('show')->where('id', '[A-Za-z0-9-]+');
    });