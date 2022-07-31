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
        Schema::create('icon_academy_startup_data', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('institute_name');
            $table->text('startup_idea_title');
            $table->text('startup_idea_desc');
            $table->enum('commitement_payment_status', ['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum Unggah');
            $table->string('commitement_payment_path')->nullable();
            $table->unsignedTinyInteger('profile_verified_by')->nullable();
            $table->enum('competition_round', ['Administrasi', 'Pending' ,'Penyisihan', 'Semifinal', 'Final'])->default('Administrasi');
            $table->text('commitement_payment_comment')->nullable();
            $table->unsignedBigInteger('leader_id');
            $table->unsignedBigInteger('member1_id');
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
        Schema::dropIfExists('icon_academy_startup_data');
    }
};
