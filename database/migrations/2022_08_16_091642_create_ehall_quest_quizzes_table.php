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
        Schema::create('ehall_quest_quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->enum('question_type', ['Pilgan', 'Picture', 'ToF'])->comment('Pilgan : Pilihan Ganda, Isian : isian singkat, ToF : Benar atau salah');
            $table->text('question')->comment('Soal kuis');
            $table->string('img_path')->comment('Gambar soal apabila ada')->nullable();
            $table->string('opt_a')->comment('Opsi jawaban A apabila tipe soal Pilgan')->nullable();
            $table->string('opt_b')->comment('Opsi jawaban B apabila tipe soal Pilgan')->nullable();
            $table->string('opt_c')->comment('Opsi jawaban C apabila tipe soal Pilgan')->nullable();
            $table->string('opt_d')->comment('Opsi jawaban D apabila tipe soal Pilgan')->nullable();
            $table->string('answer')->comment('Jawaban kuis, isikan abjad (A/B/C/D) untuk pilgan, isikan jawaban biasa untuk isian, isikan true atau false untuk ToF');
            $table->text('explanation')->comment('Penjelasan terkait kuis');
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
        Schema::dropIfExists('ehall_quest_quizzes');
    }
};
