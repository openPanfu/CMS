<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('sex');
            $table->integer('coins')->nullable();
            $table->boolean('goldpanda')->default(0);
            $table->boolean('sheriff')->default(0);
            $table->integer('social_level')->default(1);
            $table->integer('social_score')->nullable();
            $table->tinyInteger('currentGameServer')->nullable();
            $table->integer('ticket_id')->nullable();
            $table->date('birthday')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->date('last_login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
