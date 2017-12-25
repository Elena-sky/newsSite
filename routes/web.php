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

    Route::get('/category/update/{id}', 'MainController@adminViewUpdateCategory')->name('viewUpdateCategory'); // View редактирование категории
    Route::post('/category/update/save', 'MainController@adminActionSaveUpdateCategory')->name('actionSaveUpdateCategory'); // Action сохранить редактироование категории

    Route::get('/category/delete/{id}', 'MainController@adminActionCategoryDelete')->name('actionDeleteCategory'); //Action удаление категории

    Route::get('/news', 'MainController@adminaViewNews')->name('newsView'); // Управление товарами
//    Route::get('/product/view', 'AdminController@viewAddProduct')->name('addNewProductPage'); // View page добавления нового товара
//    Route::post('/product/add', 'AdminController@actionAddNewProduct')->name('actionNewAddProduct'); //Добавление нового товара
//
//    Route::get('/product/update/{id}', 'AdminController@viewProductUpdate')->name('productUpdateView'); // Редактирование товара
//    Route::post('/product/update/save', 'AdminController@actionProductUpdateSave')->name('actionUpdateSave'); // Action редактирование товара
//    Route::get('/product/delete/{id}', 'AdminController@actionProductDelete')->name('actionDeleteProduct'); // Action удаление товара

});