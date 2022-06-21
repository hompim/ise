<?php

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
    Route::get('/email/verify', \App\Http\Livewire\Pages\Auth\EmailVerification::class)->name('verification.notice'); //For Email Verification

    Route::middleware('verified')->group(function () {
       // Route::get('/ganti-password', \App\Http\Livewire\Pages\Auth\GantiPassword::class)->name('ganti-password');

        //Admin
        Route::group(['prefix' => 'admin', 'middleware' => 'usertype:admin'], function () {
            Route::get('/shorten-link', App\Http\Livewire\Pages\Admin\ShortenLink\Index::class)->name('admin.shorten-link');

            //Bionix
            Route::group(['prefix' => 'bionix', 'middleware' => 'usertype:bionix_admin'], function () {
                Route::get('/', App\Http\Livewire\Pages\Bionix\Admin\Beranda\Index::class)->name('bionix.admin.beranda.index');
                Route::get('/daftar-peserta', App\Http\Livewire\Pages\Bionix\Admin\DaftarPeserta\Index::class)->name('bionix.admin.daftar-peserta.index');
                Route::get('/pengumuman', App\Http\Livewire\Pages\Bionix\Admin\Pengumuman\Index::class)->name('bionix.admin.pengumuman.index');
                Route::group(['prefix' => 'verifikasi'], function () {
                    Route::get('/identitas', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiIdentitas\Index::class)->name('bionix.admin.verifikasi-identitas.index');
                    Route::get('/pembayaran', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiPembayaran\Index::class)->name('bionix.admin.verifikasi-pembayaran.index');
                });
            });
        });

        //Peserta
        Route::group(['prefix' => 'peserta', 'middleware' => 'usertype:member'], function () {
           Route::get('/', \App\Http\Livewire\Pages\DashboardGeneral\ChooseDashboard::class)->name('peserta.dashboard.choose');

            //Bionix Dashboard
            Route::group(['prefix' => 'bionix'], function () {
                Route::group(['middleware' => 'bionixcheck:unregistered'], function () {
                    Route::middleware(['usertype:Mahasiswa'])->group(function () {
                        Route::get('register/college', \App\Http\Livewire\Pages\Auth\Bionix\RegisterCollege::class)->middleware(['accessdate:true,01-01-2021 00:00:00,01-09-2021 23:59:59'])->name('register-college');
                    });
                    Route::middleware('usertype:Siswa SMA')->group(function () {
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
        });
    });
});
