<?php

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

 Route::get('db_test', function() {
    $results = DB::select('select name un from test_tbl');
    return "user name : ".$results[0]->un;
 });

Route::get('user', 'UserController@showUsers');