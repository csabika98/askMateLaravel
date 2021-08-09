<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_question')->nullable(false);
            $table->integer('id_registered_user')->nullable(false);
            $table->string('message')->nullable(false);
            $table->integer('vote_number')->nullable(false);
            $table->timestamp('submission_time')->useCurrent();
            $table->foreign('id_question')->references('id')->on('questions');
            $table->foreign('id_registered_user')->references('id')->on('registered_user');
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
        Schema::dropIfExists('answer');
    }
}
