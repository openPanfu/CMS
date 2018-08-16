<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GsAddSeckey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('gameservers', function($table) {
			$table->string('secret_key', 64)->nullable()->after('goldpanda');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('gameservers', function($table) {
			$table->dropColumn('secret_key');
		});
    }
}
