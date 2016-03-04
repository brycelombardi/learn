<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('about', 'PagesController@about');
    Route::get('contact', 'PagesController@contact');

    Route::resource('articles', 'ArticlesController');

});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
