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
        Schema::create('team_senior_data', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('info_source');
            $table->string('judul_ide_bisnis')->nullable();
            $table->string('bmc_file_path')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->enum('competition_round', ['Penyisihan', 'Semifinal', 'Final'])->default('Penyisihan');
            $table->enum('profile_verif_status', ['Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Tahap Verifikasi');
            $table->unsignedTinyInteger('profile_verified_by')->nullable();
            $table->text('profile_verif_comment')->nullable();
            $table->boolean('want_to_pay')->default(true);
            $table->boolean('payment_batch_2')->default(false);
            $table->unsignedInteger('payment_price')->default(0);
            $table->string('invoice_id')->nullable();
            $table->string('payment_proof_path')->nullable();
            $table->enum('payment_verif_status', ['Belum Bayar', 'Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum Bayar');
            $table->unsignedTinyInteger('payment_verified_by')->nullable();
            $table->text('payment_verif_comment')->nullable();
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
        Schema::dropIfExists('team_senior_data');
    }
};
