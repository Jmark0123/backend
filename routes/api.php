<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
route:: get('/carousel',  [CarouselItemsController::class, 'index']);
route:: get('/carousel/{id}',  [CarouselItemsController::class, 'show']);
route:: post('/carousel',  [CarouselItemsController::class, 'store']);
route:: put('/carousel/{id}',  [CarouselItemsController::class, 'update']);
route:: delete('/carousel/{id}',  [CarouselItemsController::class, 'destroy']);

route:: get('/user',  [UserController::class, 'index']);
route:: get('/user/{id}',  [UserController::class, 'show']);
route:: post('/user',  [UserController::class, 'store'])->name('user.store');
route:: put('/user/{id}',  [UserController::class, 'update'])->name('user.update');
route:: put('/user/email/{id}',  [UserController::class, 'email'])->name('user.email');
route:: put('/user/password/{id}',  [UserController::class, 'password'])->name('user.password');
route:: delete('/user/{id}',  [UserController::class, 'destroy']);



