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

// Route::get('employee', function () {
//     return view('employee');
// });

Route::get('employee','EmployeeController@index');

Route::get('office/{name}','OfficeController@index');

Route::get('/form', 'EmployeeController@form');
Route::post('/form/progress', 'EmployeeController@progress');
