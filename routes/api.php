<?php

use Illuminate\Http\Request;

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

Route::get('department','DepartmentController@index');
Route::post('department','DepartmentController@store');
Route::get('department/{id}','DepartmentController@show');
Route::put('department/{id}','DepartmentController@update');
Route::delete('department/{id}','DepartmentController@destroy');

