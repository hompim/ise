<div class="px-8 pb-8">
    <h1 class="text-3xl font-weight-bold text-white">Halo, Selamat Datang di Dashboard Webinar Kick-Off 2022</h1>
    <hr />
    <div class="grid grid-cols-2 gap-4 mt-4">
        <div class="shadow rounded p-4 bordeflex-1 col-span-3 md:col-span-1"
            style="height: 32rem;background-color: #191a1e">
            <livewire:livewire-pie-chart :pie-chart-model="$infoSourcePieData" />
        </div>
        <div class="shadow rounded text-white p-4 bordeflex-1 flex-1 col-span-3 md:col-span-1"
            style="height: 32rem; background-color: #191a1e">
            <livewire:livewire-pie-chart :pie-chart-model="$presensiStatusPieData" />
        </div>
    </div>
</div>

@push('css')
    <style>
        .apexcharts-legend-text {
            color: #d2d6dc!important;
            fill: #d2d6dc;
        }

        .apexcharts-title-text {
            color: #d2d6dc;
            fill: #d2d6dc;
        }
    </style>
@endpush

@push('js')
    @livewireChartsScripts
@endpush
