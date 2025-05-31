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


Route::get('portfolio',['as'=>'portfolio.index','uses'=>'PortfolioController@index']);


Route::get('translatei',['as'=>'translate.index','uses'=>'TranslateController@index']);

Route::get('testgsheets',['as'=>'testgsheets.index','uses'=>'EGMailerController@index'])->middleware(['cors']);
Route::get('testmail2',['as'=>'testgsheets.mail','uses'=>'EGMailerController@mail'])->middleware(['cors']);

//Auth::routes();

#Route::redirect('/', 'login');
