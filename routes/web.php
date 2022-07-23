<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Landing\Ise;
use App\Http\Livewire\Pages\Landing\Icon;
use App\Http\Livewire\Pages\Landing\Bionix;
use App\Http\Livewire\Pages\Auth\Bionix\RegisterCollege;
use App\Http\Livewire\Pages\Auth\Bionix\RegisterStudent;
use App\Http\Livewire\Pages\Auth\Bionix\RegistrasiRoadshow;
use App\Http\Livewire\Pages\Auth\Icon\Academy\RegisterDataScience;
use App\Http\Livewire\Pages\Auth\Icon\Academy\RegisterStartup;
use App\Http\Livewire\Pages\Bionix\Peserta\IdentitasTim;
use App\Mail\SertifikatMail;
use App\Mail\WebinarKickOffAcaraMail;
use App\Models\Icon\IconWebinarKickOff;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Spatie\SimpleExcel\SimpleExcelReader;

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

// Coming Soon Route
Route::get('/coming-soon', function () {
    return view('coming-soon-page');
});

// <!-- Route::get('/sendEmail', function () {
//     $pesertas = IconWebinarKickOff::all();

//     foreach ($pesertas as $peserta) {
//         Mail::to($peserta->member->user->email)->send(new WebinarKickOffAcaraMail);
//         sleep(4);
//     }

//     return response()->json([
//         'success' => true
//     ]);
// }); -->

// Route::get('/sendCertif', function() {
//     $rows = SimpleExcelReader::create(public_path().'/'.'csv/peserta.csv')->getRows();

//     $rows->each(function(array $rowProperties) {
//         Mail::to($rowProperties['Email'])->send(new SertifikatMail($rowProperties['Nama Lengkap'], $rowProperties['Merged Doc URL - Sertifikat Webinar KickOff ISE 2022']));
//         sleep(3);
//      });
// });

// Route::get('/Registerbcl', RegisterCollege::class);
// Route::get('/Registerst', RegisterStudent::class);
// Route::get('/Registerbclroad', RegistrasiRoadshow::class);

//Route Dashboard -> Dashboard.php
Route::prefix('dashboard')->group(__DIR__ . '/dashboard.php');


Route::get('/{shorten_link}', function ($shorten_link) {
    $destination = \App\Models\ShortenLink::where('shorten_link', $shorten_link)->first();
    if ($destination) {
        $destination = $destination->destination;
        return Redirect::to(strpos($destination, 'http') !== false ? $destination : 'http://' . $destination);
    }
    return abort(404);
});


Route::get('testing', function () {
    return view('livewire.pages.auth.icon.tes');
});

///Route Testng Register ACADEMY
Route::get('/Registerds', RegisterDataScience::class);
Route::get('/Registersa', RegisterStartup::class);

