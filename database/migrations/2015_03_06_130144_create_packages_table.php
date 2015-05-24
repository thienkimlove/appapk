<?php

use App\Game;
use App\Package;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('game_id')->unsigned();
            $table->string('name')->unique();
            $table->string('status')->nullable();
			$table->timestamps();

            $table->foreign('game_id')
                  ->references('id')
                  ->on('games')
                  ->onDelete('cascade');
		});

        $games =  Game::all();
        foreach ($games as $i=>$game) {
            $temp = str_replace('http://www.9apps.com/jump/down/', '', $game->download);
            $temp = str_replace('/app/', '', $temp);

            $check = Package::where('name', $temp)->first();
            if (!$check) {
                Package::create([
                    'game_id' => $game->id,
                    'name' => $temp
                ]);
            }
        }

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('packages');
	}

}
