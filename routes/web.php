<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\WishlistController;

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
Route::get('/product/category/{id}', 'App\Http\Controllers\ShopController@shop_by_category');
Route::get('/about-us', 'App\Http\Controllers\AboutusController@index');
Route::get('/contact-us', 'App\Http\Controllers\AboutusController@contact_us');

//Route::get('/send-email', [EmailController::class, "sendEmail"]);
Route::post('/send-email', [EmailController::class, "ajaxSendEmail"])->name('sendmail');
Route::post('/send-contact', [EmailController::class, "contact_to_admin"])->name('contact.to.admin');

//Route::namespace('Auth')->group(function () {

Route::get('/auth/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('user.login');


Route::get('/auth/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/user/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/user/mypage', [WishlistController::class, 'index'])->name('user.mypage');
Route::post('/user/favourate', [WishlistController::class, 'store'])->name('add.fav');
Route::get('/user/unfavourite/{id}', [WishlistController::class, 'destroy'])->name('remove.fav');

//});