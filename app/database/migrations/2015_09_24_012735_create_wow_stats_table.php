<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWowStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wowstats', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('health');
            $table->string('strength');
            $table->string('haste');
            $table->string('multistrike');
            $table->string('mastery');
            $table->string('versatility');
            $table->string('criticalStrike');
            $table->string('itemLevel');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
