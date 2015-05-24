<?php

use App\Game;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

class AddSlugToGames extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('games', function(Blueprint $table)
		{
			$table->string('slug', 32);
		});
        $games = Game::all();
        foreach( $games as $item )
        {
            $item->slug = Str::limit( Str::slug( $item->title), 32, '');
            $item->save();
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('games', function(Blueprint $table)
		{
			$table->dropColumn('slug');
		});
	}

}
