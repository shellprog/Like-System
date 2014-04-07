<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SystemTableProfileCreate extends Migration {

	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile', function($table)
		{
    		$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->bigInteger('user_id')->unique();
		    $table->string('username', 255);
		    $table->string('email', 255);
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
		Schema::drop('profile');
	}

}
