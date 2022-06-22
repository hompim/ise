<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Landing\Ise;
use App\Http\Livewire\Pages\Landing\Icon;
use App\Http\Livewire\Pages\Landing\Bionix;

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

Route::get('/design', function () {
    return view('design-system');
});

///Landing page Route
Route::get('/', Ise::class)->name('ise');
Route::get('/bionix', Bionix::class)->name('bionix');
Route::get('/icon', Icon::class)->name('icon');

// Coming Soon Route
Route::get('/coming-soon', function () {
    return view('coming-soon');
});

//Route Dashboard -> Dashboard.php
Route::prefix('dashboard')->group(__DIR__ . '/dashboard.php');
