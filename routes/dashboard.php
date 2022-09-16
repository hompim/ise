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
        Route::get('/bantuan', App\Http\Livewire\Pages\DashboardGeneral\Bantuan::class)->name('bantuan');
        Route::get('/term&conditions', App\Http\Livewire\Pages\Auth\TermCondition::class)->name('term-condition');


        //Admin
        Route::group(['prefix' => 'admin', 'middleware' => 'usertype:admin'], function () {
            Route::get('/shorten-link', App\Http\Livewire\Pages\Admin\ShortenLink\Index::class)->name('admin.shorten-link');

            //Bionix
            Route::group(['prefix' => 'bionix', 'middleware' => 'usertype:bionix_admin'], function () {
                Route::get('/', Index::class)->name('bionix.admin.beranda.index');
                Route::get('/daftar-peserta', App\Http\Livewire\Pages\Bionix\Admin\DaftarPeserta\Index::class)->name('bionix.admin.daftar-peserta.index');
                Route::get('/pengumuman', App\Http\Livewire\Pages\Bionix\Admin\Pengumuman\Index::class)->name('bionix.admin.pengumuman.index');
                Route::get('/promo', App\Http\Livewire\Pages\Bionix\Admin\Promo\Index::class)->name('bionix.admin.promo.index');
                Route::group(['prefix' => 'verifikasi'], function () {
                    Route::get('/identitas', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiIdentitas\Index::class)->name('bionix.admin.verifikasi-identitas.index');
                    Route::get('/pembayaran', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiPembayaran\Index::class)->name('bionix.admin.verifikasi-pembayaran.index');
                    Route::get('/pembayaran-dp', App\Http\Livewire\Pages\Bionix\Admin\VerifikasiDp\Index::class)->name('bionix.admin.verifikasi-pembayaran-dp.index');
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

                Route::group(['prefix' => 'academy'], function () {
                    //Route::get('/', \App\Http\Livewire\Pages\Icon\Academy\Admin\Beranda\Index::class)->name('academy.admin.beranda');
                    Route::get('daftar-peserta', \App\Http\Livewire\Pages\Icon\Academy\Admin\DaftarPeserta\Index::class)->name('academy.admin.daftar-peserta');
                    Route::get('verifikasi', \App\Http\Livewire\Pages\Icon\Academy\Admin\Verifikasi\Index::class)->name('academy.admin.verifikasi');
                    Route::get('verifikasi-seleksi', \App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiSeleksi\Index::class)->name('academy.admin.verifikasi-seleksi');
                    Route::get('verifikasi-pembayaran', \App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiPembayaran\Index::class)->name('academy.admin.verifikasi-pembayaran');
                });

                Route::group(['prefix' => 'ehall'], function () {
                    Route::get('artikel', \App\Http\Livewire\Pages\Icon\Ehall\Admin\Article\Index::class)->name('ehall.admin.artikel');
                    Route::get('quiz', \App\Http\Livewire\Pages\Icon\Ehall\Admin\Quiz\Index::class)->name('ehall.admin.quiz');
                });

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
                Route::get('pembayaran-dp', App\Http\Livewire\Pages\Auth\Bionix\RegistrasiRoadshow::class)->name('pembayaran-roadshow');
                Route::get('pembayaran-dp/success', \App\Http\Livewire\Pages\Auth\RegisterSuccess\DpBionix::class)->name('bionix.pembayaran-success');

                Route::group(['middleware' => 'bionixcheck:unregistered'], function () {
                    Route::middleware(['usertype:Mahasiswa'])->group(function () {
                        Route::get('register/college', \App\Http\Livewire\Pages\Auth\Bionix\RegisterCollege::class)->name('register-college');
                    });
                    Route::middleware('usertype:SMA')->group(function () {
                        Route::get('register/student', \App\Http\Livewire\Pages\Auth\Bionix\RegisterStudent::class)->name('register-student');
                        // Route::get('register/student', function () {
                        //     return view('closed-registration');
                        // })->name('register-student');
                    });
                });

                Route::get('register/success', \App\Http\Livewire\Pages\Auth\RegisterSuccess\Bionix::class)->name('register-student-success');

                Route::group(['middleware' => 'usertype:bionix_peserta'], function () {
                    Route::get('/', \App\Http\Livewire\Pages\Bionix\Peserta\Beranda::class)->name('bionix.peserta.homepage');
                    Route::get('/identitas-tim', \App\Http\Livewire\Pages\Bionix\Peserta\IdentitasTim::class)->name('bionix.peserta.identitas-tim');

                    Route::group(['middleware' => 'bionixcheck:profil_terverifikasi'], function () {
                        Route::get('/pembayaran', \App\Http\Livewire\Pages\Bionix\Peserta\Pembayaran::class)->name('bionix.peserta.pembayaran');
                    });
                    Route::get('/bonus-tryout', \App\Http\Livewire\Pages\Bionix\Peserta\Tugas\Index::class)->name('bionix.peserta.bonus-tryout');
                    Route::get('/tryout', \App\Http\Livewire\Pages\Bionix\Peserta\To::class)->name('bionix.peserta.tryout');
                });


                Route::group(['prefix' => 'is-class'], function () {
                    Route::get('register', \App\Http\Livewire\Pages\Auth\Bionix\RegistraiIsClass::class)->name('register-is-class')->middleware(['accessdate:true,16-07-2022 07:00:00,30-12-2022 13:00:00']);
                    Route::get('register-success', \App\Http\Livewire\Pages\Auth\RegisterSuccess\IsClass::class)->name('isclass.register-success');
                    //Route::get('register/success', \App\Http\Livewire\Pages\Auth\Icon\Talkshow\Success::class)->name('register-success-talkshow');


                    Route::group(['middleware' => 'usertype:isclass_peserta'], function () {
                        Route::get('/', \App\Http\Livewire\Pages\Bionix\IsClass\Peserta\Beranda::class)->name('isclass.peserta.beranda');
                    });
                });
            });

            //Icon
            Route::group(['prefix' => 'icon'], function () {
                Route::group(['prefix' => 'academy'], function () {
                    // Rute DS Academy
                    Route::group(['prefix' => 'data-science', 'middleware' => 'iconcheck:unregistered'], function () {
                        // Route::get('register', \App\Http\Livewire\Pages\Auth\Icon\Academy\RegisterDataScience::class)->name('register-data-science-academy');
                        Route::get('register', function () {
                            return view('closed-registration');
                        })->name('register-data-science-academy');
                    });

                    // Rute Startup Academy
                    Route::group(['prefix' => 'startup', 'middleware' => 'iconcheck:unregistered'], function () {
                        Route::get('register', \App\Http\Livewire\Pages\Auth\Icon\Academy\RegisterStartup::class)->name('register-startup-academy');
                    });

                    Route::group(['middleware' => 'usertype:academy_peserta'], function () {
                        Route::get('register/success', \App\Http\Livewire\Pages\Auth\RegisterSuccess\DataScienceAcademy::class)->name('register-ds-success');
                        Route::get('beranda', \App\Http\Livewire\Pages\Icon\Academy\Peserta\Beranda::class)->name('academy.peserta.beranda');
                        Route::get('identitas-tim', \App\Http\Livewire\Pages\Icon\Academy\Peserta\IdentitasTim::class)->name('academy.peserta.identitas-tim');
                        Route::get('pembayaran', \App\Http\Livewire\Pages\Icon\Academy\Peserta\Pembayaran::class)->name('academy.peserta.pembayaran');
                        Route::get('seleksi', \App\Http\Livewire\Pages\Icon\Academy\Peserta\Seleksi::class)->name('academy.peserta.seleksi');
                    });
                });
            });

            Route::group(['prefix' => 'webinar'], function () {
                Route::get('register', \App\Http\Livewire\Pages\Auth\Icon\RegistasiWebinarKickOff::class)->name('register-webinar')->middleware('iconcheck:!webinar_peserta');
                Route::get('success', \App\Http\Livewire\Pages\Auth\RegisterSuccess\Webinar::class)->name('webinar.register-success');


                Route::group(['middleware' => 'iconcheck:webinar_peserta'], function () {
                    Route::get('beranda',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\Beranda::class)->name('webinar.peserta.beranda');
                    Route::get('presensi',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\Presensi::class)->name('webinar.peserta.presensi')->middleware(['accessdate:true,16-07-2022 08:45:00,16-07-2022 13:00:00']);
                    Route::get('success/{type}',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\PresensiSuccess::class)->name('webinar.peserta.success');
                    Route::get('feedback',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\Feedback::class)->name('webinar.peserta.feedback')->middleware(['accessdate:true,16-07-2022 08:45:00,17-07-2022 13:00:00']);;
                    //Route::get('feedback/success',  \App\Http\Livewire\Pages\Icon\Webinar\Peserta\PresensiSuccess::class)->name('webinar.peserta.presensi.success');
                });
            });
        });
    });
});
