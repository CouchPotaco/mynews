<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;

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

Route::group(['prefix' => 'admin'], function() {
    //Route::get('news/create', 'Admin\NewsController@add');
    Route::get('/news/create', [NewsController::class, 'add']);
    Route::get('/profile/create', [ProfileController::class, 'add']);
    Route::get('/profile/edit', [ProfileController::class, 'edit']);
});
