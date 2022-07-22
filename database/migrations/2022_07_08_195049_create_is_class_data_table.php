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
        Schema::create('is_class_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->string('identity_card_path');
            $table->string('twibbon_path');
            $table->string('instagram_path');
            $table->string('school_name');
            $table->enum('info_source', ["Media Sosial ISE! 2022",
                "Media Sosial selain ISE! 2022 (info lomba, dll)",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"])->nullable();
            $table->enum('status', ['online', 'offline']);
            $table->enum('profile_verif_status', ['Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Tahap Verifikasi');
            $table->unsignedTinyInteger('profile_verified_by')->nullable();
            $table->text('profile_verif_comment')->nullable();
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
        Schema::dropIfExists('is_class_data');
    }
};
