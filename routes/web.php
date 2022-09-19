<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/janken', 'App\Http\Controllers\JankenController@index');

Route::post('/janken', 'App\Http\Controllers\JankenController@result');

Route::get('/again', 'App\Http\Controllers\JankenController@again');

Route::get('/calculator', 'App\Http\Controllers\CalculatorController@index');

Route::post('/calculate', 'App\Http\Controllers\CalculatorController@calculate');

Route::get('/typingSite/play', 'App\Http\Controllers\PlayController@play');
Route::post('/typingSite/play', 'App\Http\Controllers\PlayController@play');

Route::post('/submitTopic', 'App\Http\Controllers\PlayController@submitTopic');
Route::get('/submitTopic', 'App\Http\Controllers\PlayController@submitTopic');
