<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('categories', CategoryController::class);
    $router->resource('products', ProductController::class);
    $router->resource('happyclients', HappyclientController::class);
    $router->resource('members', MemberController::class);
    $router->resource('abouts', AboutusController::class);
     $router->resource('contacts', ContactusController::class);
     $router->resource('banners', BannerController::class);


});