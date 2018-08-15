<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddXYRotRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventories', function($table) {
			$table->integer('x')->default(0)->after('item_id');
			$table->integer('y')->default(0)->after('x');
			$table->integer('rot')->default(0)->after('y');
			$table->integer('room')->default(0)->after('rot');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
			$table->dropColumn('x');
			$table->dropColumn('y');
			$table->dropColumn('rot');
			$table->dropColumn('room');
		});
    }
}
