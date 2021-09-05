<?php

use Illuminate\Support\Facades\Auth;
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
//
//Route::get('/', function () {
//
//    $article=\App\Models\Article::find(1);
//    return $article->comments()->get()->pluck('name');
//    return get_class(\App\Models\Article::find(1));
//    return $article->categories()->get();
//    return view('index');
//});
//


Auth::routes();

Route::get('/home', function (){

    return redirect(\route('home'));
});


Route::prefix('/')->namespace('App\Http\Controllers')->group(function (){
    Route::get('/','ArticleController@index')->name('home');
    Route::get('/contact','ArticleController@contact')->name('contact');
    Route::get('/articles/{article}','ArticleController@singlearticle');
    Route::post('/articles/{article}','ArticleController@postcomment')->name('postcomment');

    Route::get('category/{category}','ArticleController@articleCategory')->name('categoryarticle');

    Route::get('auth/google','GoogleAuthController@redirect')->name('google.auth');
    Route::get('auth/google/callback','GoogleAuthController@callback');

});
