<?php

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


$router->get('/api/buildings', 'BuildingController@index');
$router->post('/api/buildings', 'BuildingController@store');
$router->get('/api/buildings/{id}', 'BuildingController@show');
$router->put('/api/buildings/{id}', 'BuildingController@update');
$router->delete('/api/buildings/{id}', 'BuildingController@destroy');