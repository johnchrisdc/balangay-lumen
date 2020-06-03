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

$router->get('/regions', 'DataController@getRegions');
$router->get('/regions/{region_id}', 'DataController@getRegion');
$router->get('/regions/{region_id}/provinces', 'DataController@getRegionProvinces');

$router->get('/provinces', 'DataController@getAllProvinces');
$router->get('/provinces/{province_id}', 'DataController@getProvince');
$router->get('/provinces/{province_id}/municipalities', 'DataController@getProvinceMunicipalities');

$router->get('/municipalities', 'DataController@getMunicipalities');
$router->get('/municipalities/{municipality_id}', 'DataController@getMunicipality');
$router->get('/municipalities/{municipality_id}/barangays', 'DataController@getMunicipalityBarangays');

$router->get('/barangays', 'DataController@getBarangays');
$router->get('/barangays/{barangay_id}', 'DataController@getBarangay');
