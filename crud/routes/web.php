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

Route::get('/',[HomeController::class, 'homePage'])->name('home.page');
Route::get('/guitar/list', [GuitarsController::class, 'getList'])->name('guitar.list');
Route::get('/guitar/register', [GuitarsController::class, 'getRegister'])->name('guitar.register');
Route::post('/guitar/register', [GuitarsController::class, 'postRegister'])->name('guitar.sendregister');
Route::get('/guitar/{guitar}/edit', [GuitarsController::class, 'editList'])->name('guitar.editlist');
Route::put('/guitar/{guitar}/edit', [GuitarsController::class, 'putEdit'])->name('guitar.sendedit');
Route::get('/guitar/{guitar}/delete', [GuitarsController::class, 'modalDelete'])->name('guitar.delete');
Route::delete('/guitar/{guitar}', [GuitarsController::class, 'deleteRegister'])->name('guitar.senddelete');
