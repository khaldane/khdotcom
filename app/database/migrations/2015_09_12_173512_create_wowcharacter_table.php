<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWowcharacterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wowcharacters', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('realm');
            $table->string('battlegroup');
            $table->integer('class');
            $table->integer('race');
            $table->integer('gender');
            $table->integer('level');
            $table->integer('achievementPoints');
            $table->string('thumbnail');
            $table->string('calcClass');
            $table->integer('totalHonorableKills');
            $table->timestamp('lastModified');
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
