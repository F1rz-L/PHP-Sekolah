<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group( ['prefix' => 'api', 'middleware' => 'auth'], function() use ($router) {
    $router->post('/register', ['uses' => 'LoginController@register']);
    $router->post('/login', ['uses' => 'LoginController@login']);
    $router->get('/user', ['uses' => 'LoginController@index']);
    $router->put('/user/{id}', ['uses' => 'LoginController@update']);

    $router->get('/kategori', ['uses' => 'KategoriController@index']);
    $router->get('/kategori/{id}', ['uses' => 'KategoriController@show']);
    $router->post('/kategori', ['uses' => 'KategoriController@create']);
    $router->put('/kategori/{id}', ['uses' => 'KategoriController@update']);
    $router->delete('/kategori/{id}', ['uses' => 'KategoriController@destroy']);

    $router->get('/pelanggan', ['uses' => 'PelangganController@index']);
    $router->get('/pelanggan/{id}', ['uses' => 'PelangganController@show']);
    $router->post('/pelanggan', ['uses' => 'PelangganController@create']);
    $router->put('/pelanggan/{id}', ['uses' => 'PelangganController@update']);
    $router->delete('/pelanggan/{id}', ['uses' => 'PelangganController@destroy']);

    $router->get('/menu', ['uses' => 'MenuController@index']);
    $router->get('/menu/{id}', ['uses' => 'MenuController@show']);
    $router->post('/menu', ['uses' => 'MenuController@create']);
    $router->post('/menu/{id}', ['uses' => 'MenuController@update']);
    $router->delete('/menu/{id}', ['uses' => 'MenuController@destroy']);

    $router->get('/order', ['uses' => 'OrderController@index']);
    $router->get('/order/{a}/{b}', ['uses' => 'OrderController@show']);
    $router->post('/order', ['uses' => 'OrderController@create']);
    $router->put('/order/{id}', ['uses' => 'OrderController@update']);
    $router->delete('/order/{id}', ['uses' => 'OrderController@destroy']);

    $router->get('/orderdetail', ['uses' => 'OrderDetailController@index']);
    $router->get('/orderdetail/{a}/{b}', ['uses' => 'OrderDetailController@show']);
    $router->post('/orderdetail', ['uses' => 'OrderDetailController@create']);
    $router->put('/orderdetail/{id}', ['uses' => 'OrderDetailController@update']);
    $router->delete('/orderdetail/{id}', ['uses' => 'OrderDetailController@destroy']);

});
