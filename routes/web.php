<?php
namespace App\Http\Controllers;

use Auth;
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

Auth::routes();

Route::get('/post/{slug}','PostController@getPost')->name('welcome');

Route::get('/', 'HomeController@index')->name('welcome');

//Route::get('article/{id}.html', 'PostsController@article');

//Route::get('/category', 'CategoryController@category');

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
