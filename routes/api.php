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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//PIZZA
Route::get('pizzas','PizzaController@index');
Route::get('pizza/{id}','PizzaController@show');
Route::post('pizza','PizzaController@store');
Route::put('pizza/{id}','PizzaController@update');
Route::delete('pizza/{id}','PizzaController@destroy');
//STATUSES
Route::get('statuses', 'StatusController@index');
Route::get('status/{id}', 'StatusController@show');
Route::post('status', 'StatusController@store');
Route::put('status/{id}', 'StatusController@update');
Route::delete('status/{id}', 'StatusController@destroy');
//ORDERS
Route::get('pizzaorders', 'PizzaorderController@index');
Route::get('pizzaorder/{id}', 'PizzaorderController@show');
Route::post('pizzaorder', 'PizzaorderController@store');
Route::put('pizzaorder/{id}', 'PizzaorderController@update');
Route::delete('pizzaorder/{id}', 'PizzaorderController@destroy');
