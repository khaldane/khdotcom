<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolio', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('companyName');
            $table->string('shortDescription');
            $table->string('description');
            $table->string('type');
            $table->string('languages');
            $table->string('frameworks');
            $table->string('features');
            $table->string('featuredImg');
            $table->string('mobileImg');
            $table->string('secondaryImg');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('portfolio');
	}

}
