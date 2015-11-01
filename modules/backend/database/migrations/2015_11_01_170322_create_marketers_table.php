<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marketers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->unique('email_unique');
			$table->string('password');
			$table->string('twitter_handle')->nullable();
			$table->integer('phone_number')->unsigned()->nullable();
			$table->binary('image')->nullable();
			$table->string('postcode');
			$table->enum('skills', ['Advertising', 'Branding', 'Business Development', 'Customer Insight', 'Digital Marketing', 'Graphic Design' , 'Innovation' , 'Marketing', 'Photography', 'PR', 'SEO', 'Social Media Marketing', 'Strategic Marketing', 'Videography', 'Web Development']);
			$table->text('biography')->nullable();
			$table->text('experience')->nullable();
			$table->text('education')->nullable();
			$table->text('wesbite')->nullable();
			$table->string('job_role')->nullable();
			$table->boolean('is_activated')->default(0);
			$table->string('activation_code')->nullable()->index('act_code_index');
			$table->integer('no_of_logins')->nullable();
			$table->string('oauth_provider')->nullable();
			$table->string('oauth_uid')->nullable();
			$table->string('oauth_token')->nullable();
			$table->string('oauth_secret')->nullable();
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
		Schema::drop('marketers');
	}

}
