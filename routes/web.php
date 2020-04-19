<?php

/*
|--------------------------------------------------------------------------
| routerlication Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->router->version();
});

/**
 * Routes for resource lokasi-propinsi
 */
$router->get('lokasi-propinsi', 'LokasiPropinsisController@all');
$router->get('lokasi-propinsi/{id}', 'LokasiPropinsisController@get');
$router->post('lokasi-propinsi', 'LokasiPropinsisController@add');
$router->put('lokasi-propinsi/{id}', 'LokasiPropinsisController@put');
$router->delete('lokasi-propinsi/{id}', 'LokasiPropinsisController@remove');

/**
 * Routes for resource lokasi-kotakab
 */
$router->get('lokasi-kotakab', 'LokasiKotakabsController@all');
$router->get('lokasi-kotakab/{id}', 'LokasiKotakabsController@get');
$router->post('lokasi-kotakab', 'LokasiKotakabsController@add');
$router->put('lokasi-kotakab/{id}', 'LokasiKotakabsController@put');
$router->delete('lokasi-kotakab/{id}', 'LokasiKotakabsController@remove');



/**
 * Routes for resource lokasi-kecamatan
 */
$router->get('lokasi-kecamatan', 'LokasiKecamatansController@all');
$router->get('lokasi-kecamatan/{id}', 'LokasiKecamatansController@get');
$router->post('lokasi-kecamatan', 'LokasiKecamatansController@add');
$router->put('lokasi-kecamatan/{id}', 'LokasiKecamatansController@put');
$router->delete('lokasi-kecamatan/{id}', 'LokasiKecamatansController@remove');


/**
 * Routes for resource lokasi-kelurahan
 */
$router->get('lokasi-kelurahan', 'LokasiKelurahansController@all');
$router->get('lokasi-kelurahan/{id}', 'LokasiKelurahansController@get');
$router->post('lokasi-kelurahan', 'LokasiKelurahansController@add');
$router->put('lokasi-kelurahan/{id}', 'LokasiKelurahansController@put');
$router->delete('lokasi-kelurahan/{id}', 'LokasiKelurahansController@remove');
