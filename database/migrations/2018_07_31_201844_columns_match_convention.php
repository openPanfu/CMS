<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnsMatchConvention extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
			$table->renameColumn('currentGameServer', 'current_gameserver');
		});
		Schema::table('states', function(Blueprint $table) {
			$table->renameColumn('lastChanged', 'last_changed');
		});
		Schema::table('gameservers', function(Blueprint $table) {
			$table->renameColumn('playerCount', 'player_count');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
			$table->renameColumn('current_gameserver', 'currentGameServer');
		});
		Schema::table('states', function(Blueprint $table) {
			$table->renameColumn('last_changed', 'lastChanged');
		});
		Schema::table('gameservers', function(Blueprint $table) {
			$table->renameColumn('player_count', 'playerCount');
		});
    }
}
