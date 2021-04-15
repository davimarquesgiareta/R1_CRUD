<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuitarsController;


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

Route::get('/',[HomeController::class, 'homePage']);
Route::get('/guitar/list', [GuitarsController::class, 'getList']);
Route::get('/guitar/register', [GuitarsController::class, 'getRegister']);
Route::post('/guitar/register', [GuitarsController::class, 'postRegister']);
Route::get('/guitar/{guitar}/edit', [GuitarsController::class, 'editList']);
Route::put('/guitar/{guitar}/edit', [GuitarsController::class, 'putEdit']);
Route::get('/guitar/{guitar}/delete', [GuitarsController::class, 'modalDelete']);
Route::delete('/guitar/{guitar}', [GuitarsController::class, 'deleteRegister']);
