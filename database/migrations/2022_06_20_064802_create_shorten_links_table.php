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
        Schema::create('shorten_links', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->text('description');
            $table->string('shorten_link')->unique()->collation('utf8_bin');
            $table->string('qr_code')->collation('utf8_bin')->nullable();
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
        Schema::dropIfExists('shorten_links');
    }
};
