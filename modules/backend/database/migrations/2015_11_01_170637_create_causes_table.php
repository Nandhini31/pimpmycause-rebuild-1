<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('causes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('password');
			$table->string('email');
			$table->binary('image');
			$table->string('website');
			$table->text('biography');
			$table->integer('phone_number')->unsigned()->nullable();
			$table->string('postcode');
			$table->string('twitter_handle')->nullable();
			$table->boolean('is_activated')->default(0);
			$table->enum('type',['Disater Relief', 'Poverty Alleviation', 'Environment', 'Education', 'Animal Welfare', 'Children and Youth', 'Disability', 'Health', 'Food']);
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
		Schema::drop('causes');
	}

}
