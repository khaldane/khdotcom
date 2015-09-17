<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiabloCharacterGearTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diablogear', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('characterId');
            $table->string('slot');
            $table->string('itemId');
            $table->string('name');
            $table->string('icon');
            $table->string('displayColor');
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
