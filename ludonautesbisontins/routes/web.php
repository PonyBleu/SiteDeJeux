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

Route::get('/', 'PagesController@home');
Route::get('association', 'PagesController@association');
Route::get('forum', 'PagesController@forum');
Route::get('articles', 'PagesController@articles');
Route::get('jeux', 'PagesController@jeux');
Route::get('listejeux', 'PagesController@listejeux');
Route::get('inscription', 'PagesController@inscription');
Route::get('albumphotos', 'PagesController@albumphotos');
Route::get('article', 'PagesController@article');
