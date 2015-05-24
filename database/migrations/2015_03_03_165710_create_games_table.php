<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->text('desc');
            $table->string('icon');
            $table->integer('category_id')->unsigned();
            $table->text('news');
            $table->string('update');
            $table->string('version');
            $table->string('require');
            $table->string('total');
            $table->string('link');
            $table->string('site');
            $table->string('download');
			$table->timestamps();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('games');
	}

}
