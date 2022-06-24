<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_junior_data', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->enum('info_source', ["Media Sosial ISE! 2021",
                "Media Sosial selain ISE! 2021 (info lomba, dll)",
                "Roadshow ISE! 2021",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga"]);
            $table->string('school_name');
            $table->unsignedInteger('city_id');
            $table->enum('competition_round', ['Penyisihan 1', 'Penyisihan 2', 'Semifinal', 'Final'])->default('Penyisihan 1');
            $table->enum('profile_verif_status', ['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum Unggah');
            $table->unsignedTinyInteger('profile_verified_by')->nullable();
            $table->text('profile_verif_comment')->nullable();
            $table->unsignedInteger('payment_price')->default(0);
            $table->string('invoice_id')->nullable();
            $table->string('payment_proof_path')->nullable();
            $table->enum('payment_verif_status', ['Belum Unggah','Belum Bayar', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum Bayar');
            $table->unsignedTinyInteger('payment_verified_by')->nullable();
            $table->text('payment_verif_comment')->nullable();
            $table->unsignedBigInteger('leader_id');
            $table->unsignedBigInteger('member_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_junior_data');
    }
};
