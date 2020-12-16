<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->bigInteger('phone');
            $table->integer('age');
            $table->string('food');
            $table->integer('eat');
            $table->integer('movies');
            $table->integer('tv');
            $table->integer('radio');
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
        Schema::dropIfExists('survey');
    }
}
