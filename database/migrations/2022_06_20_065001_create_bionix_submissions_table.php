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
        Schema::create('bionix_submissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->string('team_type');
            $table->string('file_path')->nullable();
            $table->string('video_link')->nullable();
            $table->enum('submission_type',['Junior Semifinal','Senior Penyisihan','Senior Semifinal', 'Junior Final']);
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
        Schema::dropIfExists('bionix_submissions');
    }
};
