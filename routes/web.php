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

$router->post('/create_customer', 'CustomerController@createCustomer');
$router->get('/show_all_customer', 'CustomerController@showAllData');
$router->get('/show_detail_customer/{id}', 'CustomerController@showDetailData');
$router->put('/update_customer/{id}', 'CustomerController@updateTodo');
$router->delete('/delete_customer/{id}', 'CustomerController@deleteTodo');