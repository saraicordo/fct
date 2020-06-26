<?php
use App\Category;
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


Route::get('/', 'ViewController@index');
Route::get('/product/{id}', 'ViewController@product');
Route::get('/category/{id}', 'ViewController@category');
Route::get('/about', 'ViewController@about');
Route::get('/contact', 'ViewController@contact');
Route::get('/fairtrade', 'ViewController@fairtrade');
Route::get('/cart/{id}', 'ViewController@addtocart'); 
Route::get('/cart', 'ViewController@cart'); 


//Ruta autentificación
Route::get('/login', 'ConnectController@getLogin')->name('login');
Route::post('/login', 'ConnectController@postLogin')->name('login');
Route::get('/register', 'ConnectController@getRegister')->name('register');
Route::post('/register', 'ConnectController@postRegister')->name('register');
Route::get('/logout', 'ConnectController@getLogout')->name('logout');
