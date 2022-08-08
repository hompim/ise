<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bionix\IsClassData;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use App\Models\Bionix\TeamJuniorMember;
use App\Models\Bionix\TeamSeniorMember;
use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconWebinarKickOff;
use App\Models\Icon\IconAcademyStartupMember;
use App\Models\Icon\IconAcademyDataScienceMember;
use App\Models\Icon\IconAcademyStartupData;

class BotlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TIM
        $tim = [
            "bionix_junior" => TeamJuniorData::count(),
            "bionix_senior" => TeamSeniorData::count(),
            "Icon_startup" => IconAcademyStartupData::count(),
            "Icon_startup" => IconAcademyDataScienceData::count(),
            "total" => TeamJuniorData::count() + TeamSeniorData::count() + IconAcademyStartupData::count() + IconAcademyDataScienceData::count()
        ];

        //Peserta
        $peserta = [
            "webinar_kickoff" => IconWebinarKickOff::count(),
            "bionix_junior" => TeamJuniorMember::count(),
            "bionix_senior" => TeamSeniorMember::count(),
            "is_class" => IsClassData::count(),
            "icon_startup" => IconAcademyStartupMember::count(),
            "icon_data" => IconAcademyDataScienceMember::count(),
            "total" => IconWebinarKickOff::count() + TeamJuniorMember::count() + TeamSeniorMember::count() + IsClassData::count() + IconAcademyStartupMember::count() + IconAcademyDataScienceMember::count()
        ];

        return response()->json([
            "success" => true,
            "message" => "statistik data ise",
            "data" => [
                "tim" => $tim,
                "peserta" => $peserta
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
