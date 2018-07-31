<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameserversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gameservers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('playerCount')->nullable();
            $table->string('url')->nullable();
            $table->integer('port')->nullable();
            $table->boolean('goldpanda')->nullable();
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
        Schema::dropIfExists('gameservers');
    }
}
