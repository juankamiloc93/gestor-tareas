<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/task-index', App\Livewire\Pages\TaskIndex::class)
    ->middleware(['auth', 'verified'])
    ->name('task-index');

Route::view('task-create', 'livewire.pages.task-create')
    ->middleware(['auth', 'verified'])
    ->name('task-create');

require __DIR__.'/auth.php';
