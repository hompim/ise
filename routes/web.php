<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Landing\Ise;
use App\Http\Livewire\Pages\Landing\Icon;
use App\Http\Livewire\Pages\Landing\Bionix;
use App\Http\Livewire\Pages\Auth\Bionix\RegisterCollege;
use App\Http\Livewire\Pages\Auth\Bionix\RegisterStudent;

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

///Landing page Route
Route::get('/', Ise::class)->name('ise');
Route::get('/bionix', Bionix::class)->name('bionix');
Route::get('/icon', Icon::class)->name('icon');
<<<<<<< HEAD
Route::get('/daftarbsl', RegisterStudent::class)->name('bsl');
Route::get('/daftarbcl', RegisterCollege::class)->name('bcl');


=======
//Route::get('/daftarbsl', RegisterStudent::class)->name('bsl');
>>>>>>> 79f7296e531c59ac658cb4b24b4d6d8090d382b1

// Coming Soon Route
Route::get('/coming-soon', function () {
    return view('coming-soon');
});

//Route Dashboard -> Dashboard.php
Route::prefix('dashboard')->group(__DIR__ . '/dashboard.php');
