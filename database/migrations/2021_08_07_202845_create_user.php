<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_user', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('email')->nullable(false);
            $table->string('password_hash')->nullable(false);
            $table->timestamp('registration_time')->useCurrent();
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
        Schema::dropIfExists('registered_user');
    }
}
