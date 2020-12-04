<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Api Order
Route::post('orders', 'OrderController@create');
Route::get('orders', 'OrderController@index');


//make webhook
Route::post('webhook', 'WebhookController@midtransHandler');
