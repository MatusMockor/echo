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
            Route::get('/', [PostsController::class, 'index'])->name('posts.index');
            Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
            Route::post('/', [PostsController::class, 'store'])->name('posts.store');
            Route::get('/{post:slug}/edit', [PostsController::class, 'edit'])->name('posts.edit');
            Route::put('/{post:slug}', [PostsController::class, 'update'])->name('posts.update');
            Route::delete('{post:slug}', [PostsController::class, 'destroy'])->name('posts.destroy');
        });
    });
});

require __DIR__ . '/auth.php';
