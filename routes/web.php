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

Route::get('/', 'PageController@welcome');
Route::get('/yazilimlar', 'PageController@yazilimlarIndex');
Route::get('/hakkimizda', 'PageController@hakkimizdaIndex');
Route::get('/alan-adi', 'PageController@alanAdiIndex');
Route::get('/web-hosting', 'PageController@webHostingIndex');
Route::get('/sunucu', 'PageController@serverPacketIndex');
Route::get('/iletisim', 'PageController@contactIndex');

Route::post('/ara', 'DomainAvaibilityController@searchDomain')->name('searchDomain');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin/')->middleware('auth')->group(function () {
    Route::resource('web-packet','WebPacketController');
    Route::resource('about','AboutController');
    Route::resource('domain-name','DomainNameController');
    Route::resource('web-hosting','WebHostingController');
    Route::resource('server-packet','ServerPacketController');
    Route::resource('contact','ContactController');
});
