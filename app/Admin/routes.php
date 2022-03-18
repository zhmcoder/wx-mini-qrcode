<?php

use Illuminate\Routing\Router;

Route::group([
    'domain' => config('deep_admin.route.domain'),
    'prefix' => config('deep_admin.route.api_prefix'),
    'namespace' => config('deep_admin.route.namespace'),
    'middleware' => config('deep_admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@home')->name('admin.home');
    $router->get('/home', 'HomeController@home')->name('admin.home');
});
