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
    return view('index');
});
Route::get('Plantilla', function () {
    return view('plantilla');
});
Route::get('contactanos', function () {
    return view('contactanos');
});
Route::get('reservaciones', function () {
    return view('reservaciones');
});
Route::get('Reservaciones2', function () {
    return view('reservaciones2');
});
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');