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


Route::get('/news/{id}', 'MainController@userNewsViewPage')->name('newsViewPage'); //обзор новости

Route::get('/category/{id}', 'MainController@userCategoryViewPage')->name('categoryViewPage'); // обзор новостей в категории




//Администрирование

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'MainController@adminPageView')->name('adminPageView'); // Админпанель

    //Категории
    Route::get('/category', 'MainController@adminViewCategoryPage')->name('viewCategoryAdmin'); // View управление категориями
    Route::get('/category/add', 'MainController@adminAddCategoryView')->name('addCategoryView'); // View page добавление новой категории
    Route::post('/category/add/save', 'MainController@adminActionAdminAddCategory')->name('actionAddCategory'); // Action добавление категории

    Route::get('/category/update/{id}', 'MainController@adminViewUpdateCategory')->name('viewUpdateCategory'); // View редактирование категории
    Route::post('/category/update/save', 'MainController@adminActionSaveUpdateCategory')->name('actionSaveUpdateCategory'); // Action сохранить редактироование категории

    Route::get('/category/delete/{id}', 'MainController@adminActionCategoryDelete')->name('actionDeleteCategory'); //Action удаление категории

    //Новости
    Route::get('/news', 'MainController@adminViewNews')->name('newsView'); // View Управление новостями
    Route::get('/news/view', 'MainController@adminViewAddNews')->name('viewAddNews'); // View page добавления новой новости
    Route::post('/news/add', 'MainController@adminActionAddNews')->name('actionAddNews'); // Action Добавление новой новости

    Route::get('/news/update/{id}', 'MainController@adminViewNewsUpdate')->name('viewNewsUpdate'); // View Редактирование новости
    Route::post('/news/update/save', 'MainController@adminActionNewsUpdateSave')->name('actionNewsUpdateSave'); // Action редактирование новости
    Route::get('/news/delete/{id}', 'MainController@adminActionNewsDelete')->name('actionNewsDelete'); // Action удаление  новости

    //Реклама
    Route::get('/advertising', 'MainController@adminViewAdvertising')->name('viewAdvertising'); //View Управление рекламой
    Route::get('/advertising/add', 'MainController@adminViewAddAdvertising')->name('viewAddAdvertising'); //View добавление новой рекламы
    Route::post('/advertising/add/save', 'MainController@adminActionAddAdvertising')->name('actionAddAdvertising'); // Action Добавление новой рекламы



});
Auth::routes(

);

Route::get('/home', 'HomeController@index')->name('home');
