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

$router->get('/test', function () use ($router) {
    echo "LOL";
});

$router->get('/', function () use ($router) {
    $test = file_get_contents("http://localhost/test");
    var_dump($test);
});

app()->router->get('zoap/{key}/server', [
    'as' => 'zoap.server.wsdl',
    'uses' => '\Viewflex\Zoap\ZoapController@server'
]);

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('countries/{item_count}', ['uses' => 'RESTController@showCountryAndCities']);
    $router->get('helloworld', ['uses' => 'RESTController@helloWorld']);
});

$router->get('zoap/{key}/server', [
    'as' => 'zoap.server.wsdl',
    'uses' => '\Viewflex\Zoap\ZoapController@server'
]);

$router->post('zoap/{key}/server', [
    'as' => 'zoap.server',
    'uses' => '\Viewflex\Zoap\ZoapController@server'
]);