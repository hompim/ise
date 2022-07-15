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
    Route::get('/email/verify', function () {
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
        Route::get('/bantuan', \App\Http\Livewire\Pages\DashboardGeneral\Bantuan::class)->name('bantuan');
        Route::get('/term&conditions', \App\Http\Livewire\Pages\Auth\TermCondition::class)->name('term-condition');


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

                Route::group(['prefix' => 'is-class'], function () {
                    Route::get('/', \App\Http\Livewire\Pages\Bionix\IsClass\Admin\Beranda\Index::class)->name('isclass.admin.beranda');
                    Route::get('daftar-peserta', \App\Http\Livewire\Pages\Bionix\IsClass\Admin\DaftarPeserta\Index::class)->name('isclass.admin.daftar-peserta');
                    Route::get('verifikasi-identitas', \App\Http\Livewire\Pages\Bionix\IsClass\Admin\VerifikasiIdentitas\Index::class)->name('isclass.admin.verifikasi-identitas');
                });
            });

            //Icon
            Route::group(['prefix' => 'icon', 'middleware' => 'usertype:admin'], function () {
                Route::get('/', \App\Http\Livewire\Pages\Icon\Admin\Index::class)->name('icon.admin.index');

                Route::group(['prefix' => 'webinar'], function () {
                    Route::get('beranda', \App\Http\Livewire\Pages\Icon\Webinar\Admin\Beranda\Index::class)->name('webinar.admin.beranda');
                    Route::get('daftar-peserta', \App\Http\Livewire\Pages\Icon\Webinar\Admin\Index::class)->name('webinar.admin.daftar-webinar');
                    Route::get('presensi', \App\Http\Livewire\Pages\Icon\Webinar\Admin\Presensi\Index::class)->name('webinar.admin.presensi');
                    Route::get('feedback', \App\Http\Livewire\Pages\Icon\Webinar\Admin\Feedback\Index::class)->name('webinar.admin.feedback');
                    //Route::get('register/success', \App\Http\Livewire\Pages\Auth\Icon\Talkshow\Success::class)->name('register-success-talkshow');
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
                        Route::get('register/college', \App\Http\Livewire\Pages\Auth\Bionix\RegisterCollege::class)->name('register-college');
                    });
                    Route::middleware('usertype:SMA')->group(function () {
                        Route::get('register/student', \App\Http\Livewire\Pages\Auth\Bionix\RegisterStudent::class)->name('register-student')->middleware(['accessdate:true,16-07-2022 00:00:00,01-09-2021 23:59:59']);
                    });
                });

                Route::get('register/success', \App\Http\Livewire\Pages\Auth\RegisterSuccess\Bionix::class)->name('register-student-success');

                Route::group(['middleware' => 'usertype:bionix_peserta'], function () {
                    Route::get('/', \App\Http\Livewire\Pages\Bionix\Peserta\Beranda::class)->name('bionix.peserta.homepage');
                    Route::get('/identitas-tim', \App\Http\Livewire\Pages\Bionix\Peserta\IdentitasTim::class)->name('bionix.peserta.identitas-tim');

                    Route::group(['middleware' => 'bionixcheck:profil_terverifikasi'], function () {
                        Route::get('/pembayaran', \App\Http\Livewire\Pages\Bionix\Peserta\Pembayaran::class)->name('bionix.peserta.pembayaran');
                    });
                });


            Route::group(['prefix' => 'is-class'], function () {
                Route::get('register', \App\Http\Livewire\Pages\Auth\Bionix\RegistraiIsClass::class)->name('register-is-class');
                Route::get('register-success', \App\Http\Livewire\Pages\Auth\RegisterSuccess\IsClass::class)->name('isclass.register-success');
                //Route::get('register/success', \App\Http\Livewire\Pages\Auth\Icon\Talkshow\Success::class)->name('register-success-talkshow');


                Route::group(['middleware' => 'usertype:isclass_peserta'], function () {
                    Route::get('/', \App\Http\Livewire\Pages\Bionix\IsClass\Peserta\Beranda::class)->name('isclass.peserta.beranda');
                });
            });
            });

            Route::group(['prefix' => 'webinar'], function () {
                Route::get('register', \App\Http\Livewire\Pages\Auth\Icon\RegistasiWebinarKickOff::class)->name('register-webinar')->middleware('iconcheck:!webinar_peserta');
                Route::get('success', \App\Http\Livewire\Pages\Auth\RegisterSuccess\Webinar::class)->name('webinar.register-success');


                Route::group(['middleware' => 'iconcheck:webinar_peserta'], function () {
                    Route::get('beranda',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\Beranda::class)->name('webinar.peserta.beranda');
                    Route::get('presensi',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\Presensi::class)->name('webinar.peserta.presensi')->middleware(['accessdate:true,13-07-2022 09:00:00,16-07-2022 13:00:00']);
                    Route::get('success/{type}',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\PresensiSuccess::class)->name('webinar.peserta.success');
                    Route::get('feedback',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\Feedback::class)->name('webinar.peserta.feedback')->middleware(['accessdate:true,13-07-2022 09:00:00,16-07-2022 13:00:00']);;
                    //Route::get('feedback/success',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\PresensiSuccess::class)->name('webinar.peserta.presensi.success');
                });
            });
        });
    });
});
