<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//User Routes

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// List of users
Route::get('users', 'UserController@index');

//List single user
Route::get('user/{id}', 'UserController@show');

//Create new user
Route::post('user', 'UserController@store');

//Update user
Route::put('user', 'UserController@store');

//Delete user
Route::delete('user/{id}', 'UserController@destroy');

//Category Routes

//List Categories
Route::get('categories', 'CategoryController@index');

//List single Category
Route::get('category/{id}', 'CategoryController@show');

//Create new category
Route::post('category', 'CategoryController@store');

//Update category
Route::put('category', 'CategoryController@store');

//Delete Category
Route::delete('category/{id}', 'CategoryController@destroy');


//Product Routes
//List all products
Route::get('products', 'ProductController@index');

//List single product
Route::get('product/{id}', 'ProductController@show');

//Create new product
Route::post('product', 'ProductController@store');

//Update product
Route::put('product', 'ProductController@store');

//Delete product
Route::delete('product/{id}', 'ProductController@destroy');