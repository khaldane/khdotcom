<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeplayedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diablocharacters', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('characterId');
            $table->string('name');
            $table->integer('level');
            $table->string('class');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('Intelligence');
            $table->integer('vitality');
            $table->integer('damage');
            $table->integer('toughness');
            $table->integer('healing');
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
