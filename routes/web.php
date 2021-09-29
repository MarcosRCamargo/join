<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
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
Route::resource('produto', ProdutoController::class);
Route::resource('post', 'ProdutoController@store');
Route::resource('put', 'ProdutoController@update');
Route::resource('post', 'ProdutoController@destroy');
Route::resource('categoria', CategoriaController::class);
Route::resource('post', 'CategoriaController@store');
Route::delete('categoria/{id}', 'CategoriaController@destroy')->name('categoria.destroy');

