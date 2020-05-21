<?php

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

Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'index'
]);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::get('blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'blog.post'
]);

Route::group(['prefix' => 'admin'], function () {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index']);

    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create']);

    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create']);

    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit']);

    Route::get('delete/{id}', [
        'uses' => 'PostController@adminDelete',
        'as' => 'admin.delete'
    ]);
});

Route::get('db', [
    'uses' => 'DataController@getDatabases',
    'as' => 'db.index'
]);

Route::get('test', function(){
    return view('test.message');
});

Route::get('/invoke', 'TestController@invoke');

