<?php

use Illuminate\Support\Facades\Redis;
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
    $visits = Redis::incr('visit');
    return view('welcome')->withVisits($visits);
});



Route::get('/articles', 'ArticlesController@list')->name('list_articles');
Route::get('/article/{article}', 'ArticlesController@show')->name('show_article');
Route::get('/cache/redis/articles', 'RedisController@allArticles')->name('redis_articles');
