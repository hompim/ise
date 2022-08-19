<?php

use App\Mail\SertifikatMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\WebinarKickOffAcaraMail;
use Illuminate\Support\Facades\Route;
use App\Models\Icon\IconWebinarKickOff;
use App\Http\Livewire\Pages\Landing\Ise;
use Illuminate\Support\Facades\Redirect;
use App\Http\Livewire\Pages\Landing\Icon;
use Spatie\SimpleExcel\SimpleExcelReader;
use App\Http\Livewire\Pages\Landing\Bionix;
use App\Http\Livewire\Pages\Landing\Academy\Startup;
use App\Http\Livewire\Pages\Auth\Bionix\RegisterCollege;
use App\Http\Livewire\Pages\Auth\Bionix\RegisterStudent;
use App\Http\Livewire\Pages\Bionix\Peserta\IdentitasTim;
use App\Http\Livewire\Pages\Landing\Academy\DataScience;
use App\Http\Livewire\Pages\Auth\Bionix\RegistrasiRoadshow;
use App\Http\Livewire\Pages\Auth\Icon\Academy\RegisterStartup;
use App\Http\Livewire\Pages\Auth\Icon\Academy\RegisterDataScience;
use App\Http\Livewire\Pages\Landing\EHall\Game\Index as GameIndex;
use App\Http\Livewire\Pages\Landing\EHall\Index as EHallIndex;
use App\Http\Livewire\Pages\Landing\EHall\Prestasi\Content as PrestasiContent;
use App\Http\Livewire\Pages\Landing\EHall\Prestasi\Index as PrestasiIndex;
use App\Http\Livewire\Pages\Landing\EHall\Quiz\ChoosePicture;
use App\Http\Livewire\Pages\Landing\EHall\Quiz\Index as QuizIndex;
use App\Http\Livewire\Pages\Landing\EHall\Quiz\MultipleChoice;
use App\Http\Livewire\Pages\Landing\EHall\Quiz\TrueOrFalse;
use App\Http\Livewire\Pages\Landing\EHall\Startup\Content;
use App\Http\Livewire\Pages\Landing\EHall\Startup\Index;

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

// ICON Landing Route
Route::group(['prefix' => 'icon'], function () {
    //Route academy
    // icon/data-science
    Route::get('data-science', DataScience::class)->name('data-science-academy');
    // icon/startup
    Route::get('startup', Startup::class)->name('startup-academy');

    // Route e-hall
    Route::group(['prefix' => 'e-hall'], function () {
        // icon/e-hall/
        Route::get('/', EHallIndex::class)->name('e-hall');
        // Route startup e-hall
        Route::group(['prefix' => 'startup'], function () {
            // icon/e-hall/startup
            Route::get('/', Index::class)->name('home-startup-ehall');
            // icon/e-hall/startup/content
            Route::get('content', Content::class)->name('content-startup-ehall');
        });
        // Route prestasi
        Route::group(['prefix' => 'prestasi'], function () {
            // icon/e-hall/prestasi
            Route::get('/', PrestasiIndex::class)->name('home-prestasi-ehall');
            // icon/e-hall/prestasi/content
            Route::get('content', PrestasiContent::class)->name('content-prestasi-ehall');
        });
        // Route quiz
        Route::group(['prefix' => 'quiz'], function () {
            // icon/e-hall/quiz/
            Route::get('/', QuizIndex::class)->name('quiz-ehall');
            // icon/e-hall/quiz/choose-picture
            Route::get('choose-picture', ChoosePicture::class)->name('picture-quiz-ehall');
            // icon/e-hall/quiz/multiple-choice
            Route::get('multiple-choice', MultipleChoice::class)->name('choice-quiz-ehall');
            // icon/e-hall/quiz/true-or-false
            Route::get('true-or-false', TrueOrFalse::class)->name('true-false-quiz-ehall');
        });
        // icon/e-hall/game
        Route::get('game', GameIndex::class)->name('game-ehall');
    });
});

// Coming Soon Route
Route::get('/coming-soon', function () {
    return view('coming-soon-page');
})->name('coming-soon');

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
// Route::get('/Registerds', RegisterDataScience::class);
// Route::get('/Registersa', RegisterStartup::class);
