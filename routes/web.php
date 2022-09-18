<?php

use App\Http\Controllers\admin\PostsController;
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

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {

        Route::get('/', function () {
            return view('admin.master');
        })->name('dashboard');

        Route::prefix('posts')->group(function () {
            Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
        });
    });
});

require __DIR__ . '/auth.php';
