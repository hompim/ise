<?php

namespace App\Http\Livewire\Pages\Icon\Webinar\Admin\Beranda;

use App\Models\Icon\IconWebinarKickOff;
use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class Index extends Component
{
    protected $infoSourcePieData;
    protected $presensiStatusPieData;

    public function render()
    {

        return view('livewire.pages.icon.webinar.admin.beranda.index')
            ->layout('layouts.dashboard')
            ->with('infoSourcePieData', $this->infoSourcePieData)
            ->with('presensiStatusPieData', $this->presensiStatusPieData);
    }

    public function mount()
    {
        $this->infoSourcePieData = (new PieChartModel())
            ->setTitle('Asal Informasi Pendaftar')
            ->addSlice('Media Sosial ISE! 2022', $this->getCountInformationSource('Media Sosial ISE! 2022'), '#f6ad55')
            ->addSlice('Media Sosial selain ISE! 2022 (info lomba, dll)', $this->getCountInformationSource('Media Sosial selain ISE! 2022 (info lomba, dll)'), '#181039')
            ->addSlice('Roadshow ISE! 2022', $this->getCountInformationSource('Roadshow ISE! 2022'), '#8CE665')
            ->addSlice('Grup WA/Line/dll', $this->getCountInformationSource('Grup WA/Line/dll'), '#6C1AC0')
            ->addSlice('Sekolah (guru, dll)', $this->getCountInformationSource('Sekolah (guru, dll)'), '#F23FBD')
            ->addSlice('Teman/keluarga', $this->getCountInformationSource('Teman/keluarga'), '#34CD7A');

        $this->presensiStatusPieData = (new PieChartModel)
            ->setTitle('Informasi Presensi Peserta')
            ->addSlice('Presensi', $this->getCountPresensi(true), '#f6ad55')
            ->addSlice('Belum Presensi', $this->getCountPresensi(false), '#8CE665');
    }


    protected function getCountInformationSource($info): int
    {
        return IconWebinarKickOff::select('*')
            ->where('info_source', $info)
            ->count();
    }

    protected function getCountPresensi($status): int
    {
        return IconWebinarKickOff::select('*')
            ->where('presensi_status', $status)
            ->count();
    }
}
