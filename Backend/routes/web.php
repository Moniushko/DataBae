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

Route::get('/', 'PagesController@landing');
Route::get('home', 'PagesController@home')->name('home');
//Route::get('/', 'PagesController@home');

Route::get('settings', 'UserController@profile')->name('settings');
Route::get('user/{id}', 'UserController@userProfile');
Route::post('user/{id}', 'MessagesController@store');
Route::post('settings', 'UserController@update_profile');

Route::get('/recipes/myrecipes', 'RecipesController@myrecipes')->name('recipes');
Route::get('/recipes', 'RecipesController@index')->name('recipes');
Route::get('uploadrecipes', 'RecipesController@create')->middleware('verified');
Route::post('uploadrecipes', 'RecipesController@store');
Route::get('/recipes/categories', 'RecipesController@categories');
Route::get('/recipes/categories/{category}', 'RecipesController@categoryshow');
Route::get('/recipes/{recipe}', 'RecipesController@show');
Route::get('/recipes/{recipe}/edit', 'RecipesController@edit');
Route::post('/recipes/{recipe}/edit', 'RecipesController@update');
Route::delete('/edit/galleries/{id}', 'GalleriesController@destroy');
Route::delete('recipes/{recipe}', 'RecipesController@destroy');
Route::post('/recipes/{recipe}/replies', 'RepliesController@store');
Route::post('/recipes/{recipe}/ratings', 'RatingController@store');
Route::post('/recipes/{recipe}/favorites', 'RatingController@storeFavoriteRecipe');
Route::post('/replies/{reply}/favorites', 'RatingController@storeFavoriteReply');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/support', 'PagesController@support');
Route::post('/support', 'PagesController@sendRequest');

// messenger system
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

// temporary disable email verification for QA
Auth::routes();//Auth::routes(['verify' => true]);

//Route::get('home', 'HomeController@index')->name('home');


Route::get('find', 'SearchController@find');
Route::get('search','HomeController@getSearch');
Route::get('search', 'PagesController@getSearch');


