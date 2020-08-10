<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', 'PagesController@home');

Route::get('/login', 'UsersController@index'); 
Route::post('/login', 'UsersController@login'); 

Route::get('/dashboard', 'PagesController@index');

Route::get('/all-article', 'ArticlesController@index');
Route::get('/create-article', 'ArticlesController@create');
Route::post('/create-article', 'ArticlesController@store');
Route::get('/my-article', 'ArticlesController@my_article');
Route::get('edit-article/{article}', 'ArticlesController@edit');
Route::post('edit-article/{article}', 'ArticlesController@update');