<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{

    public $menu;

    public function render()
    {
        return view('livewire.components.sidebar');
    }

    public function mount()
    {
        $this->menu = [];

        if (Auth::user()->userable_type == 'App\Models\Admin') {
            if (Auth::user()->userable->admin_type == "Bionix Admin") {
                array_push(
                    $this->menu,
                    [
                        'type' => 'title',
                        'title' => 'BIONIX'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'bionix.admin.beranda.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Daftar Peserta',
                        'route-name' => 'bionix.admin.daftar-peserta.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-bullhorn',
                        'title' => 'Pengumuman',
                        'route-name' => 'bionix.admin.pengumuman.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Verifikasi Biodata Tim',
                        'route-name' => 'bionix.admin.verifikasi-identitas.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-money',
                        'title' => 'Verifikasi Pembayaran',
                        'route-name' => 'bionix.admin.verifikasi-pembayaran.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'fa-solid fa-percent',
                        'title' => 'Promo Code',
                        'route-name' => 'bionix.admin.promo.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-money',
                        'title' => 'Verifikasi Pembayaran DP Roadshow',
                        'route-name' => 'bionix.admin.verifikasi-pembayaran-dp.index'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'fas fa-link',
                        'title' => 'Shorten Link',
                        'route-name' => 'admin.shorten-link'
                    ],
                    [
                        'type' => 'divider',
                        'tag' => 'class=mb-3'
                    ],
                    [
                        'type' => 'title',
                        'title' => 'IS Class'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'isclass.admin.beranda'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Daftar Peserta',
                        'route-name' => 'isclass.admin.daftar-peserta'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Verifikasi Identitas',
                        'route-name' => 'isclass.admin.verifikasi-identitas'
                    ],
                    [
                        'type' => 'divider',
                        'tag' => 'class=my-2'
                    ]
                );
            } else if (Auth::user()->userable->admin_type == "Icon Admin") {
                array_push(
                    $this->menu,
                    [
                        'type' => 'title',
                        'title' => 'ICON',
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'fas fa-link',
                        'title' => 'Shorten Link',
                        'route-name' => 'admin.shorten-link'
                    ],
                    [
                        'type' => 'divider',
                        'tag' => 'mb-3'
                    ],
                    [
                        'type' => 'title',
                        'title' => 'Academy'
                    ],
                    // [
                    //     'type' => 'menu',
                    //     'icon' => 'cil-home',
                    //     'title' => 'Beranda',
                    //     'route-name' => 'academy.admin.beranda'
                    // ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Daftar Peserta',
                        'route-name' => 'academy.admin.daftar-peserta'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Verifikasi Administrasi',
                        'route-name' => 'academy.admin.verifikasi'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-book',
                        'title' => 'Verifikasi Seleksi',
                        'route-name' => 'academy.admin.verifikasi-seleksi'
                    ],
                    // [
                    //     'type' => 'title',
                    //     'title' => 'Webinar Kick Off'
                    // ],
                    // [
                    //     'type' => 'menu',
                    //     'icon' => 'cil-home',
                    //     'title' => 'Beranda',
                    //     'route-name' => 'webinar.admin.beranda'
                    // ],
                    // [
                    //     'type' => 'menu',
                    //     'icon' => 'cil-group',
                    //     'title' => 'Daftar Peserta',
                    //     'route-name' => 'webinar.admin.daftar-webinar'
                    // ],
                    // [
                    //     'type' => 'menu',
                    //     'icon' => 'cil-group',
                    //     'title' => 'Presensi Peserta',
                    //     'route-name' => 'webinar.admin.presensi'
                    // ],
                    // [
                    //     'type' => 'menu',
                    //     'icon' => 'cil-bullhorn',
                    //     'title' => 'Feedback Peserta',
                    //     'route-name' => 'webinar.admin.feedback'
                    // ],
                    [
                        'type' => 'divider',
                        'tag' => 'mb-3'
                    ],
                );
            }
        } else {
            array_push($this->menu, [
                'type' => 'menu',
                'icon' => 'far fa-calendar-alt',
                'title' => 'Events',
                'route-name' => 'peserta.dashboard.choose'
            ], [
                'type' => 'divider',
                'tag' => 'class=my-2'
            ]);

            if (Auth::user()->userable->bionix) {
                array_push(
                    $this->menu,
                    [
                        'type' => 'title',
                        'title' => 'BIONIX'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'bionix.peserta.homepage'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Identitas Tim',
                        'route-name' => 'bionix.peserta.identitas-tim'
                    ],
                );
                if (Auth::user()->userable->bionix->profile_verif_status == "Terverifikasi") {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'menu',
                            'icon' => 'cil-money',
                            'title' => 'Pembayaran',
                            'route-name' => 'bionix.peserta.pembayaran'
                        ]
                    );
                }
                if (Auth::user()->userable->bionix->payment_verif_status == "Terverifikasi" && Auth::user()->userable->jenjang == 'SMA') {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'menu',
                            'icon' => 'cil-book',
                            'title' => 'Tryout',
                            'route-name' => 'bionix.peserta.tryout'
                        ]
                    );
                }

                // if (Auth::user()->userable->jenjang == 'SMA' && Auth::user()->userable->dp->isNotEmpty()) {
                //     array_push(
                //         $this->menu,
                //         [
                //             'type' => 'menu',
                //             'icon' => 'cil-book',
                //             'title' => 'Soal Tryout',
                //             'route-name' => 'bionix.peserta.tryout'
                //         ]
                //     );
                // }

                array_push(
                    $this->menu,
                    [
                        'type' => 'divider',
                        'tag' => 'class=mb-3'
                    ]
                );
            }
            if (Auth::user()->userable->isclass) {
                array_push(
                    $this->menu,
                    [
                        'type' => 'title',
                        'title' => 'IS Class'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'isclass.peserta.beranda'
                    ],
                    [
                        'type' => 'divider',
                        'tag' => 'class=my-2'
                    ]
                );
            }
            if (Auth::user()->userable->academy) {
                if (Auth::user()->userable->academy_type == "App\Models\Icon\IconAcademyDataScienceData") {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'title',
                            'title' => 'Data Science Academy'
                        ]
                    );
                } else {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'title',
                            'title' => 'Startup Academy'
                        ]
                    );
                }
                array_push(
                    $this->menu,
                    [
                        'type' => 'menu',
                        'icon' => 'cil-home',
                        'title' => 'Beranda',
                        'route-name' => 'academy.peserta.beranda'
                    ],
                    [
                        'type' => 'menu',
                        'icon' => 'cil-group',
                        'title' => 'Identitas Tim',
                        'route-name' => 'academy.peserta.identitas-tim'
                    ],
                );
                if (Auth::user()->userable->academy->competition_round == "Commitement Fee" || Auth::user()->userable->academy->commitement_payment_status == "Terverifikasi") {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'menu',
                            'icon' => 'cil-money',
                            'title' => 'Pembayaran',
                            'route-name' => 'academy.peserta.pembayaran'
                        ]
                    );
                }
                if (Auth::user()->userable->academy->competition_round == "Seleksi") {
                    array_push(
                        $this->menu,
                        [
                            'type' => 'menu',
                            'icon' => 'cil-book',
                            'title' => 'Seleksi Data Science',
                            'route-name' => 'academy.peserta.seleksi'
                        ]
                    );
                }
                array_push(
                    $this->menu,
                    [
                        'type' => 'divider',
                        'tag' => 'class=my-2'
                    ]
                    );
            }
        }
    }
}
