<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\DaftarPeserta\Datatables;

use App\Models\Bionix\TeamJuniorMember;
use App\Models\Bionix\TeamSeniorMember;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class MemberTable extends LivewireDatatable
{
    public $exportable = true;

    public function builder()
    {
        return TeamSeniorMember::query()
            ->leftJoin("team_senior_data", "team_senior_data.id", "team_senior_members.team_id");
    }

    public function columns()
    {
        return [
            Column::name("name")->label("Nama"),
            Column::name("email")->label("Email"),
            Column::name("whatsapp")->label("No.HP"),
            Column::name("team_senior_data.team_name")->label("Nama Tim")
        ];
    }
}
