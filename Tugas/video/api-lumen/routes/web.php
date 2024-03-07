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

$router->group( ['prefix' => 'api'], function() use ($router) {
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
    $router->put('/menu/{id}', ['uses' => 'MenuController@update']);
    $router->delete('/menu/{id}', ['uses' => 'MenuController@destroy']);
});
