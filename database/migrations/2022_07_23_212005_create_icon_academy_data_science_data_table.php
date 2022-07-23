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
        Schema::create('icon_academy_data_science_data', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->text('reason_joining');
            $table->text('post_activity');
            $table->text('expectation_joining_academy');
            $table->string('university_name');
            $table->enum('competition_round', ['Administrasi', 'Penyisihan', 'Semifinal', 'Final'])->default('Administrasi');
            $table->enum('profile_verif_status', ['Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Tahap Verifikasi');
            $table->unsignedTinyInteger('profile_verified_by')->nullable();
            $table->text('profile_verif_comment')->nullable();
            $table->string('payment_proof_path')->nullable();
            $table->enum('payment_verif_status', ['Belum Unggah','Belum Bayar', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum Bayar');
            $table->unsignedTinyInteger('payment_verified_by')->nullable();
            $table->text('payment_verif_comment')->nullable();
            $table->unsignedBigInteger('leader_id');
            $table->unsignedBigInteger('member1_id')->nullable();
            $table->unsignedBigInteger('member2_id')->nullable();
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
        Schema::dropIfExists('icon_academy_data_science_data');
    }
};
