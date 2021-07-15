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


Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index');

//Route::get('/post/{id}', 'HomeController@show')->name('post.show');
//Route::get('/tag/{id}', 'HomeController@tag')->name('tag.show');
//Route::get('/category/{id}', 'HomeController@category')->name('category.show');
//Route::post('/subscribe', 'SubsController@subscribe');
//Route::get('/verify/{token}', 'SubsController@verify');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile', 'ProfileController@store');
    Route::get('/logout', 'AuthController@logout');
    Route::post('/comment', 'CommentsController@store');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register')->name('register');
    Route::get('/login', 'AuthController@loginForm')->name('login');
    Route::post('/login', 'AuthController@login');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->middleware('isAllowed:view-admin-dashboard');
    Route::resource('/categories', 'CategoriesController')->middleware('isAllowed:edit-admin-dashboard');
    Route::resource('/tags', 'TagsController')->middleware('isAllowed:delete-admin-dashboard');
    Route::resource('/users', 'UsersController')->middleware('isAllowed:view-admin-dashboard');
    Route::resource('/players', 'PlayersController')->middleware('isAllowed:view-admin-dashboard');
    Route::resource('/posts', 'PostsController')->middleware('isAllowed:view-admin-dashboard');
    Route::resource('/matches', 'MatchesController')->middleware('isAllowed:view-admin-dashboard');
    Route::get('/comments', 'CommentsController@index')->middleware('isAllowed:view-admin-dashboard');
    Route::get('/comments/toggle/{id}', 'CommentsController@toggle')->middleware('isAllowed:view-admin-dashboard');
    Route::delete('/comments/{id}/destroy', 'CommentsController@destroy')->name('comments.destroy');
    Route::resource('/subscribers', 'SubscribersController')->middleware('isAllowed:view-admin-dashboard');
});

Auth::routes();
