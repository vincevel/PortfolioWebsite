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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('landingpage',['as'=>'landingpage.index','uses'=>'LandingPageController@index'])->middleware(['cors']);
Route::post('landingpage',['as'=>'landingpage.store','uses'=>'LandingPageController@store'])->middleware(['cors']);
Route::post('ugbuttonloader',['as'=>'ugbutton.store','uses'=>'UgButtonController@store'])->middleware(['cors']);

Route::get('language/{language}/{page}',['as'=>'language.index','uses'=>'LanguageFileController@index'])->middleware(['cors']);
Route::post('translate',['as'=>'translate.store','uses'=>'TranslateController@store'])->middleware(['cors']);

Route::apiResource('class_membership', ClassMembershipController::class);

Route::post('chatpics',['as'=>'chatpics.store','uses'=>'ChatPicsApiController@store'])->middleware(['cors']);
