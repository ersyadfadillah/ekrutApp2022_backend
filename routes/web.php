<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ParkirController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function (){
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index']);

// Route::get('/posts', [DashboardController::class, 'posts']);
// Route::get('/posts/create', [PostsController::class, 'showCreatePosts']);
// Route::post('/posts/create', [PostsController::class, 'store'])->name('posts.store');

Route::get('/parkir', [ParkirController::class, 'index']);
Route::get('/parkir/laporan', [ParkirController::class, 'laporan']);
Route::post('/parkir/laporan', [ParkirController::class, 'laporan_cari']);

Route::get('/parkir/masuk', [ParkirController::class, 'masuk']);
Route::post('/parkir/masuk', [ParkirController::class, 'post_masuk'])->name('parkir.masuk');

Route::post('/parkir/keluar', [ParkirController::class, 'post_keluar'])->name('parkir.keluar');
Route::get('/parkir/keluar', [ParkirController::class, 'keluar']);
Route::post('/parkir/keluar2/{id}', [ParkirController::class, 'post_keluar2'])->name('parkir.keluar2');
