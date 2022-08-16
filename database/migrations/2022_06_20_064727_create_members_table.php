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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('jenjang',['SMA','Mahasiswa','Umum']);
            $table->nullableMorphs('academy');
            $table->nullableMorphs('bionix');
            $table->unsignedBigInteger('roadshow_school_id')->nullable();
            $table->integer('hois_point')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
