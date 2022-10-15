<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GameResultController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\PlayerController;
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

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::prefix('posts')->group(function () {
            Route::get('/', [PostController::class, 'index'])->name('posts.index');
            Route::get('/create', [PostController::class, 'create'])->name('posts.create');
            Route::post('/', [PostController::class, 'store'])->name('posts.store');
            Route::get('/{post:slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
            Route::patch('/{post:slug}', [PostController::class, 'update'])->name('posts.update');
            Route::delete('/{post:slug}', [PostController::class, 'destroy'])->name('posts.destroy');
        });

        Route::prefix('teams')->group(function () {
            Route::get('/', [TeamController::class, 'index'])->name('teams.index');
            Route::get('/create', [TeamController::class, 'create'])->name('teams.create');
            Route::post('/', [TeamController::class, 'store'])->name('teams.store');
            Route::get('/{team:slug}/edit', [TeamController::class, 'edit'])->name('teams.edit');
            Route::patch('/{team:slug}', [TeamController::class, 'update'])->name('teams.update');
            Route::delete('/{team:slug}', [TeamController::class, 'destroy'])->name('teams.destroy');
        });

        Route::prefix('game-results')->group(function () {
            Route::get('/', [GameResultController::class, 'index'])->name('gameResult.index');
            Route::get('/create', [GameResultController::class, 'create'])->name('gameResult.create');
            Route::post('/', [GameResultController::class, 'store'])->name('gameResult.store');
            Route::get('/{gameResult}/edit', [GameResultController::class, 'edit'])->name('gameResult.edit');
            Route::patch('/{gameResult}', [GameResultController::class, 'update'])->name('gameResult.update');
        });

        Route::prefix('players')->group(function () {
            Route::get('/', [PlayerController::class, 'index'])->name('players.index');
            Route::get('/create', [PlayerController::class, 'create'])->name('players.create');
            Route::post('/', [PlayerController::class, 'store'])->name('players.store');
            Route::get('/{player:slug}/edit', [PlayerController::class, 'edit'])->name('players.edit');
            Route::patch('/{player:slug}', [PlayerController::class, 'update'])->name('players.update');
            Route::delete('/{player:slug}', [PlayerController::class, 'destroy'])->name('players.destroy');
        });
    });
});

require __DIR__ . '/auth.php';
