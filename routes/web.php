<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/product/details/{id}', 'App\Http\Controllers\HomeController@show');
Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('/about-us', 'App\Http\Controllers\AboutusController@index');
Route::get('/contact-us', 'App\Http\Controllers\AboutusController@contact_us');

//Route::get('/send-email', [EmailController::class, "sendEmail"]);
Route::post('/send-email', [EmailController::class, "ajaxSendEmail"])->name('ajax.send.mail');


Route::get('/auth/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('user.login');


Route::get('/auth/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/user/auth/logout', [AuthController::class, 'logout'])->name('logout');