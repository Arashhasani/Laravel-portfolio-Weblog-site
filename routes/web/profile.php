<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/28/2021
 * Time: 11:30 AM
 */

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//
//Route::prefix('auth')->namespace('App\Http\Controllers\Admin')->group(function (){
//    Route::get('login','LoginController@showlogin')->name('loginform')->middleware('guest');
//    Route::put('login','LoginController@login')->middleware('guest');
//    Route::get('register','RegisterController@showregister')->name('registerform')->middleware('guest');
//    Route::put('register','RegisterController@register')->middleware('guest');
//
//
//
//});

//Auth::routes(['verified'=>true]);
//Auth::routes(['verify'=>true]);

Route::prefix('profile')->middleware('auth')->namespace('App\Http\Controllers\Admin')->group(function (){



    Route::get('/','ArticleController@index')->name('profile');
    Route::get('/articles','ArticleController@index2')->name('articles');
    Route::get('/article/{article}','ArticleController@edit')->name('edit.article');
    Route::post('/article/{article}','ArticleController@update');
    Route::delete('/article/{article}','ArticleController@destroy')->name('article.delete');
    Route::get('/articles/create','ArticleController@create')->name('addarticle');
    Route::post('/articles/create','ArticleController@store');

    Route::get('/users','UserController@index')->name('users.list');
    Route::get('/users/adduser','UserController@create')->name('user.add');
    Route::post('/users/adduser','UserController@store');
    Route::get('/users/{user}','UserController@edit')->name('users.edit');
    Route::post('/users/{user}','UserController@update');
    Route::delete('/users/{user}','UserController@destroy')->name('deleteuser');

    Route::get('/categories','CategoryController@index')->name('categories');
    Route::get('/categories/create','CategoryController@create')->name('addcategory');
    Route::post('/categories/create','CategoryController@store');
    Route::get('/categories/{category}','CategoryController@edit')->name('category.edit');
    Route::post('/categories/{category}','CategoryController@update');
    Route::delete('/categories/{category}','CategoryController@destroy')->name('category.delete');

    Route::get('/permissions','PermissionController@index')->name('permissins');
    Route::get('/permissions/create','PermissionController@create')->name('addpermission');
    Route::post('/permissions/create','PermissionController@store');
    Route::get('/permissions/{permission}','PermissionController@edit')->name('editpermission');
    Route::post('/permissions/{permission}','PermissionController@update');
    Route::delete('/permissions/{permission}','PermissionController@destroy')->name('deletepermission');

//    Route::resource('article.gallery','ArticleGalleryController');


    Route::get('comments','CommentController@index')->name('comments');
    Route::post('comments/{comment}','CommentController@update')->name('comments.update');




});

