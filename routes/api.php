<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarouselItemsController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------(
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
    route:: post('/login', [AuthController::class ,'login'])->name('user.login');
    route:: post('/user',  [UserController::class ,'store'])->name('user.store');

Route::middleware('auth:sanctum')->group(function () {
    route:: post('/logout', [AuthController::class ,'logout']);

    Route::controller(CarouselItemsController::class)->group(function () {  
        route:: get('/carousel',          'index');
        route:: get('/carousel/{id}',     'show');
        route:: post('/carousel',         'store');
        route:: put('/carousel/{id}',     'update');
        route:: delete('/carousel/{id}',  'destroy');
    });
Route::controller(UserController::class)->group(function () {  
        route:: get('/user',              'index');
        route:: get('/user/{id}',         'show');
        route:: put('/user/{id}',         'update')->name('user.update');
        route:: put('/user/email/{id}',   'email')->name('user.email');
        route:: put('/user/password/{id}','password')->name('user.password');
        route:: put('/user/image/{id}','image')->name('user.image');
        route:: delete('/user/{id}',      'destroy');
    });
});
