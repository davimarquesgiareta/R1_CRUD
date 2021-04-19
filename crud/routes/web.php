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

Route::get('/',[HomeController::class, 'homePage'])->name('home.get./');
Route::get('/guitar/list', [GuitarsController::class, 'getList'])->name('guitar.get.list');
Route::get('/guitar/register', [GuitarsController::class, 'getRegister'])->name('guitar.get.register');
Route::post('/guitar/register', [GuitarsController::class, 'postRegister'])->name('guitar.post.register');
Route::get('/guitar/{guitar}/edit', [GuitarsController::class, 'editList'])->name('guitar.get.edit');
Route::put('/guitar/{guitar}/edit', [GuitarsController::class, 'putEdit'])->name('guitar.put.edit');
Route::get('/guitar/{guitar}/delete', [GuitarsController::class, 'modalDelete'])->name('guitar.get.delete');
Route::delete('/guitar/{guitar}', [GuitarsController::class, 'deleteRegister'])->name('guitar.delete');
