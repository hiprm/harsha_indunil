<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccuraMembersController;

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

Route::get('/', [AccuraMembersController::class ,'index'])->name('list');
Route::get('/create', [AccuraMembersController::class ,'create'])->name('create');
Route::post('/store', [AccuraMembersController::class ,'store'])->name('store');
Route::get('/edit/{id}	', [AccuraMembersController::class ,'edit'])->name('edit');
Route::post('/update', [AccuraMembersController::class ,'update'])->name('update');
Route::get('/delete/{id}	', [AccuraMembersController::class ,'delete'])->name('delete');



