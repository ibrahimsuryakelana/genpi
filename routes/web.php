<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController as UC;
use App\Http\Controllers\SiswaController as SC;
use App\Http\Controllers\LatestNewaController as LC;


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

Auth::routes();

Route::get('/home', [UC::class, 'index']);

Route::get('/user', [UC::class, 'index']);
Route::get('/latestnews', [LC::class, 'index']);

