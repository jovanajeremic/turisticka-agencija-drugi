<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("login", "App\Http\Controllers\UserController@login");
Route::post("register", "App\Http\Controllers\UserController@register");


//sancturm middleware

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get("tip", "App\Http\Controllers\TipController@index");
    Route::get("tip/{id}", "App\Http\Controllers\TipController@find");
    Route::post("tip", "App\Http\Controllers\TipController@create");
    Route::put("tip/{id}", "App\Http\Controllers\TipController@update");
    Route::delete("tip/{id}", "App\Http\Controllers\TipController@delete");
    Route::get("drzava", "App\Http\Controllers\DrzavaController@index");
    Route::get("drzava/{id}", "App\Http\Controllers\DrzavaController@find");
    Route::post("drzava", "App\Http\Controllers\DrzavaController@create");
    Route::put("drzava/{id}", "App\Http\Controllers\DrzavaController@update");
    Route::delete("drzava/{id}", "App\Http\Controllers\DrzavaController@delete");
    Route::get("ponuda", "App\Http\Controllers\PonudaController@index");
    Route::get("ponuda/{id}", "App\Http\Controllers\PonudaController@find");
    Route::post("ponuda", "App\Http\Controllers\PonudaController@create");
    Route::put("ponuda/{id}", "App\Http\Controllers\PonudaController@update");
    Route::delete("ponuda/{id}", "App\Http\Controllers\PonudaController@delete");

    Route::get("logout", "App\Http\Controllers\UserController@logout");
});
