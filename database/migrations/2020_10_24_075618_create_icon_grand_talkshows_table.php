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
        Schema::create('icon_grand_talkshows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->string('instagram_story_path');
            $table->enum('info_source', [
                "Media Sosial ISE! 2022",
                "Media Sosial selain ISE! 2022 (info lomba, dll)",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"
            ])->nullable();
            $table->string('school_name')->nullable();
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
        Schema::dropIfExists('icon_grand_talkshows');
    }
};
