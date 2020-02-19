<?php

use Illuminate\Http\Request;
Use App\Tweet;
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

Route::get('/tweets', 'TweetsController@index');
Route::get('/tweet/{tweetId}', 'TweetsController@show');
Route::post('/tweets', 'TweetsController@store');
Route::delete('/tweets/{tweetId}', 'TweetsController@destroy');