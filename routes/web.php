<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RedisController;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('livewire', [HomeController::class, 'livewire']);

Route::get('redis/list', [RedisController::class, 'list']);
Route::get('redis/hashes', [RedisController::class, 'hashes']);
Route::get('redis/set', [RedisController::class, 'set']);
Route::get('redis/sortedset', [RedisController::class, 'sortedset']);
Route::get('redis/incr', [RedisController::class, 'incr']);
Route::get('redis/exists', [RedisController::class, 'exists']);
Route::get('redis/expire', [RedisController::class, 'expire']);
Route::get('redis/blog', [RedisController::class, 'blog']);
Route::get('redis/cache', [RedisController::class, 'cache']);
