<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index']);
Route::get('/show/{id}', [FrontController::class, 'show']);
Route::get('/register', [FrontController::class, 'register']);
Route::get('/login', [FrontController::class, 'login']);
Route::get('/logout', [FrontController::class, 'logout']);

Route::post('/postregister', [FrontController::class, 'store']);
Route::post('/postlogin', [FrontController::class, 'postlogin']);
