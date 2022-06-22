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

    public function mount(){
        $this->menu = [];

        if(Auth::user()->userable_type == 'App\Models\Admin'){
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
                        'icon' => 'fas fa-link',
                        'title' => 'Shorten Link',
                        'route-name' => 'admin.shorten-link'
                    ],
                    [
                        'type' => 'divider'
                    ]
                );
            }
        }

    }
}
