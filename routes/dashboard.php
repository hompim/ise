<?php

use App\Http\Livewire\Pages\Bionix\Admin\Beranda\Index;
use App\Http\Livewire\Pages\Bionix\Peserta\Beranda;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Guest
Route::middleware('guest')->group(function () {
    Route::get('/login', \App\Http\Livewire\Pages\Auth\Login::class)->name('login');
    Route::get('/forgot-password', \App\Http\Livewire\Pages\Auth\ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password', \App\Http\Livewire\Pages\Auth\ResetPassword::class)->name('password-reset');
    Route::get('/register', \App\Http\Livewire\Pages\Auth\Register::class)->name('register');
});
//


//Authenticate User
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', function(){
        return view('livewire.pages.auth.email-verif');
    })->name('verification.notice'); //For Email Verification
    Route::get('/', function () {
        if (Auth::user()) {
            if (Auth::user()->userable_type == 'App\Models\Admin') {
                if (Auth::user()->userable->admin_type == "Icon Admin") {
                    return redirect(route('icon.admin.index'));
                } else {
                    return redirect(route('bionix.admin.beranda.index'));
                }
            } else {
                return redirect(route('peserta.dashboard.choose'));
            }
        }
    })->name('dashboard.index');

    Route::middleware('verified')->group(function () {
    //    Route::get('/ganti-password', \App\Http\Livewire\Pages\Auth\GantiPassword::class)->name('ganti-password');
    //    Route::get('/ganti-password', \App\Http\Livewire\Pages\Auth\GantiPassword::class)->name('ganti-password');
    Route::get('/term&conditions',\App\Http\Livewire\Pages\Auth\TermCondition::class)->name('term-condition');


        //Admin
        Route::group(['prefix' => 'admin', 'middleware' => 'usertype:admin'], function () {
            Route::get('/shorten-link', App\Http\Livewire\Pages\Admin\ShortenLink\Index::class)->name('admin.shorten-link');

            //Bionix
            Route::group(['prefix' => 'bionix', 'middleware' => 'usertype:bionix_admin'], function () {
                Route::get('/', Index::class)->name('bionix.admin.beranda.index');
                Route::get('/daftar-peserta', App\Http\Livewire\Pages\Bionix\Admin\DaftarPeserta\Index::class)->name('bionix.admin.daftar-peserta.index');
                Route::get('/pengumuman', App\Http\Livewire\Pages\Bionix\Admin\Pengumuman\Index::class)->name('bionix.admin.pengumuman.index');
                Route::group(['prefix' => 'verifikasi'], function () {
                    Route::get('/identitas', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiIdentitas\Index::class)->name('bionix.admin.verifikasi-identitas.index');
                    Route::get('/pembayaran', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiPembayaran\Index::class)->name('bionix.admin.verifikasi-pembayaran.index');
                });
            });

             //Icon
             Route::group(['prefix' => 'icon', 'middleware' => 'usertype:admin'], function () {
                Route::get('/', \App\Http\Livewire\Pages\Icon\Admin\Index::class)->name('icon.admin.index');

                Route::group(['prefix' => 'webinar'], function () {
                    Route::get('daftar-peserta', \App\Http\Livewire\Pages\Icon\Webinar\Admin\Index::class)->name('webinar.admin.daftar-webinar');
                    //Route::get('register/success', \App\Http\Livewire\Pages\Auth\Icon\Talkshow\Success::class)->name('register-success-talkshow');
                });
            });
        });

        //Peserta
        Route::group(['prefix' => 'peserta', 'middleware' => 'usertype:member'], function () {
           Route::get('/', \App\Http\Livewire\Pages\DashboardGeneral\ChooseDashboard::class)->name('peserta.dashboard.choose');
           Route::get('/register-success', function(){
                return view('livewire.pages.auth.register-success');
           })->name('register-success');


            //Bionix Dashboard
            Route::group(['prefix' => 'bionix'], function () {
                Route::group(['middleware' => 'bionixcheck:unregistered'], function () {
                    Route::middleware(['usertype:Mahasiswa'])->group(function () {
                        Route::get('register/college', \App\Http\Livewire\Pages\Auth\Bionix\RegisterCollege::class)->middleware(['accessdate:true,01-01-2021 00:00:00,01-09-2021 23:59:59'])->name('register-college');
                    });
                    Route::middleware('usertype:SMA')->group(function () {
                        Route::get('register/student', \App\Http\Livewire\Pages\Auth\Bionix\RegisterStudent::class)->name('register-student');
                    });
                });

                Route::group(['middleware' => 'usertype:bionix_peserta'], function () {
                    Route::get('/')->name('bionix.peserta.homepage');
                    Route::get('/identitas-tim',\App\Http\Livewire\Pages\Bionix\Peserta\IdentitasTim::class)->name('bionix.peserta.identitas-tim');

                    Route::group(['middleware' => 'bionixcheck:profil_terverifikasi'], function () {
                        Route::get('/pembayaran', \App\Http\Livewire\Pages\Bionix\Peserta\Pembayaran::class)->name('bionix.peserta.pembayaran');
                    });
                });
            });

            Route::group(['prefix' => 'webinar'], function () {
                Route::get('register', \App\Http\Livewire\Pages\Auth\Icon\RegistasiWebinarKickOff::class)->name('register-webinar')->middleware('iconcheck:webinar_peserta');
                //Route::get('register/success', \App\Http\Livewire\Pages\Auth\Icon\Talkshow\Success::class)->name('register-success-talkshow');
            });

            Route::group(['prefix' => 'is-class'], function () {
                Route::get('register', \App\Http\Livewire\Pages\Auth\Icon\RegistasiISClass::class)->name('register-is-class');
                //Route::get('register/success', \App\Http\Livewire\Pages\Auth\Icon\Talkshow\Success::class)->name('register-success-talkshow');
            });


        });
    });
});
