<?php

use App\Livewire\ShowThread;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/', 'livewire/pages/home')
    ->middleware(['auth'])
    ->name('dashboard');
Route::get('/thread/{thread}', ShowThread::class)
    ->middleware(['auth'])
    ->name('thread');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
