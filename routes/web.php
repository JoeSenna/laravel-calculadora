<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'calculadora']);
Route::get('/calculadora', [HomeController::class, 'calculadora']);
Route::post('/calcular', [HomeController::class, 'calcular']);
Route::post('/soma',[HomeController::class, 'soma']);
Route::post('/sub',[HomeController::class, 'sub']);
Route::post('/mult',[HomeController::class, 'mult']);
Route::post('/div',[HomeController::class, 'div']);