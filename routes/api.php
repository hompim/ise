<?php

use App\Http\Controllers\BotlineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:api', 'usertypecheck:bionix_peserta', 'bionixcheck:pembayaran_terverifikasi','usertypecheck:Siswa SMA'])->get('/moodle-user', function (Request $request) {
    return response()->json([
        'team_name' => Auth::user()->userable->bionix->team_name,
        'region' => 'Region ' . Auth::user()->userable->bionix->city->region,
        'email' => Auth::user()->email,
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/statistik', [BotlineController::class,'index']);
