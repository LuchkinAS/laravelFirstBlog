<?php

use App\Http\Controllers\Blog\PostController;
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
Route::group(['prefix' => 'blog'], function (){
    Route::resource('posts', PostController::class)->names('post');
});

Route::group(['prefix' => 'admin/blog'], function () {
    Route::resource('categories', \App\Http\Controllers\Blog\Admin\BlogCategoryController::class)
        ->only(['get', 'index', 'edit', 'store', 'update', 'create'])
        ->names('blog.admin.categories');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

