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
            $table->enum('competition_round', ['Administrasi', 'Seleksi','Pending' ,'Commitement Fee','Penyisihan', 'Semifinal', 'Final', 'Rejected'])->default('Administrasi');
            $table->enum('commitement_payment_status', ['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum Unggah');
            $table->string('commitement_payment_path')->nullable();
            $table->string('jawaban_seleksi_path')->nullable();
            $table->text('commitement_payment_comment')->nullable();
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
