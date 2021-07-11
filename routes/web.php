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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//routes added after following prof's tutorial
Route::get('/users', 'BlogController@users');
Route::get('/user/{id}', 'BlogController@user');
Route::get('/writepost', 'BlogController@writepost')->middleware(['auth']);
Route::post('/addblogpost', 'BlogController@addblogpost')->middleware(['auth']);

require __DIR__.'/auth.php';