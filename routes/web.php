<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('/home');
Route::get('doLogin', [App\Http\Controllers\AuthController::class, 'login'])->name('doLogin');
Auth::routes();

Route::get('article/detail/{id}', [App\Http\Controllers\ArtikelController::class, 'detail'])->name('article.detail');


Route::group(['middleware' => ['role:admin']], function () {

  
  // kelola artikel
  Route::get('article', [App\Http\Controllers\ArtikelController::class, 'index'])->name('article');
  Route::post('article.updateOrInsert', [App\Http\Controllers\ArtikelController::class, 'updateOrInsert'])->name('article.updateOrInsert');
  Route::post('article.delete', [App\Http\Controllers\ArtikelController::class, 'delete'])->name('article.delete');
  Route::get('getArticleByID/{id}', [App\Http\Controllers\ArtikelController::class, 'getarticleByID'])->name('getarticleByID');
});