<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/tasks','App\Http\Controllers\TodoController@index')->name('tasks.create');
Route::post('/task', 'App\Http\Controllers\TodoController@store')->name('tasks.store');
Route::delete('/task/{task}', 'App\Http\Controllers\TodoController@destroy')->name('tasks.delete');

Route::get('/register','App\Http\Controllers\UserController@create')->name('register.create');
Route::post('/register','App\Http\Controllers\UserController@store')->name('register.store');

Route::get('/login','App\Http\Controllers\UserController@loginForm')->name('login.create');
Route::post('/login','App\Http\Controllers\UserController@login')->name('login');
Route::get('/logout','App\Http\Controllers\UserController@logout')->name('logout');





