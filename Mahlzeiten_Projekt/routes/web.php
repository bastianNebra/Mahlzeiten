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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

//Route f
Route::get('/','UserController@index');

Route::post('/login','UserController@login')->name('login');
Route::post('/mahlzeit','MahlzeitController@anlegen')->name('mahlzeit');
Route::get('/mahlzeit','MahlzeitController@aufrufen')->name('mahlzeit');
Route::get('/auswertung','MahlzeitController@auswertung')->name('auswertung');


//New login panel
Route::get('/register','Login@index');
Route::post('/register_user','Login@user_save');
Route::GET('/login','Login@login');




