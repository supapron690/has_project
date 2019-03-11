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
    return view('v_home');
});



Route::get('login', 'LoginController@index');
Route::get('share', 'ShareController@index');
Route::get('articlesForhealth', 'ArticlesForhealthController@index');
Route::get('forChild', 'ForChildController@index');
Route::get('health', 'HealthController@index');
Route::get('search_disease', 'Search_diseaseController@index');
Route::get('search_hospital', 'Search_hospitalController@index');
Route::get('search', 'SearchController@index');
Route::get('shareExper', 'Share_experController@index');