<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\UserController;

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

Route::get('/', [Pagecontroller::class, 'home'])->name('home');
Route::get('/contact', [Pagecontroller::class, 'contact'])->name('contact');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/service/{id}', [PageController::class, 'serviceParam'])->name('serviceParam');
Route::get('/users', [Pagecontroller::class, 'users'])->name('users');
