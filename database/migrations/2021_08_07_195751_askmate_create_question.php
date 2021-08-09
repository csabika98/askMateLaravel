<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AskmateCreateQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_image')->unsigned()->nullable();
            $table->integer('id_registered_user')->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('message')->nullable(false);
            $table->integer('vote_number')->nullable(false);
            $table->timestamp('submission_time')->useCurrent();
            $table->timestamps();
            $table->foreign('id_image')->references('id')->on('image');
            $table->foreign('id_registered_user')->references('id')->on('registered_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question');
    }
}
