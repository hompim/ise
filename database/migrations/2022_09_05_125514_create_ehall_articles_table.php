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
        Schema::create('ehall_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo_image_path')->nullable();
            $table->string('title_image_path')->nullable();
            $table->text('subtitle');
            $table->string('link_youtube')->nullable();
            $table->string('type');
            $table->text('content');
            $table->string('slug');
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
        Schema::dropIfExists('ehall_articles');
    }
};
