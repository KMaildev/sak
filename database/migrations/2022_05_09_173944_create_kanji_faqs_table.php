<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanjiFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanji_faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question_eng')->nullable();
            $table->text('answer_eng')->nullable();
            $table->text('question_jp')->nullable();
            $table->text('answer_jp')->nullable();
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
        Schema::dropIfExists('kanji_faqs');
    }
}
