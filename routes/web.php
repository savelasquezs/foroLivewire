<?php

use App\Http\Controllers\ThreadController;
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


Route::middleware(['auth'])->group(function () {
    Route::resource('threads', ThreadController::class)->except(["show, index, destroy"]);
});

require __DIR__ . '/auth.php';
