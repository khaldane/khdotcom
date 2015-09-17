<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiabloCareerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diablocareer', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('battleTag');
            $table->integer('paragonLevel');
            $table->integer('monsters');
            $table->integer('elites');
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
