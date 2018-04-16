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

//用户登录模块
//注册页面
Route::get('/register', '\App\Http\Controllers\RegisterController@index');
//注册行为
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
//登录页面
Route::get('/login', '\App\Http\Controllers\LoginController@index');
//登录行为
Route::post('/login', '\App\Http\Controllers\LoginController@login');
//登出行为
Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
//个人设置页面
Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
//个人设置操作
Route::post('/user/me/setting', '\App\Http\Controllers\UserController@settingStore');

Route::get('/', '\App\Http\Controllers\PostController@index');//文章列表页
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');//文章详情页
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');//创建文章
Route::post('/posts', '\App\Http\Controllers\PostController@store');
//编辑文章
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');
Route::post('/posts/delete', '\App\Http\Controllers\PostController@delete');//删除文章