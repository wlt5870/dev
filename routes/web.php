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

use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/t', function () {
    Cache::add('key1', 90, 56);
    dd(Cache::has('key1'));
    exit;
    //clock()->startEvent('event_name', 'LaravelAcademy.org');
    //ding()->at(["15517515025"],true)
    //    ->text("我就是我,@15517515025 是不一样的烟火");
    $title = '杭州天气';
    $markdown = "#### 杭州天气  \n ".
        "> 9度，@1825718XXXX 西北风1级，空气良89，相对温度73%\n\n ".
        "> ![screenshot](http://i01.lw.aliimg.com/media/lALPBbCc1ZhJGIvNAkzNBLA_1200_588.png)\n".
        "> ###### 10点20分发布 [天气](http://www.thinkpage.cn/) ";

    ding()->markdown($title,$markdown);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'namespace' => 'OtherLogin' ], function () {
    Route::get('/qq-login', 'LoginController@login')->name('qq-login');
});
