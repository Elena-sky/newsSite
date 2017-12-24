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
Route::get('/', 'MainController@index');

Route::get('/welcome', function () {
    return view('welcome');
});


//Администрирование

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'MainController@adminPageView')->name('adminPageView'); // Админпанель

    Route::get('/category', 'MainController@adminViewCategoryPage')->name('viewCategoryAdmin'); // View управление категориями
    Route::get('/category/add', 'MainController@adminAddCategoryView')->name('addCategoryView'); // View page добавление новой категории
    Route::post('/category/add/save', 'MainController@adminActionAdminAddCategory')->name('actionAddCategory'); // Action добавление категории


});