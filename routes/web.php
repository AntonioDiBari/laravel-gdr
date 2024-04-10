<?php

use App\Http\Controllers\Guest\DashboardController as GuestDashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\Admin\TypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// # Rotte pubbliche
Route::get('/', [GuestDashboardController::class, 'index'])
    ->name('home');

// # Rotte protette

Route::middleware('auth')
    ->prefix('/admin')
    ->name('admin.')
    ->group(function () {


        Route::resource('items', ItemController::class);
        Route::resource('characters', CharacterController::class);
        Route::resource('types', TypeController::class);

    });
Route::middleware('auth')
    ->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');
    });


require __DIR__ . '/auth.php';