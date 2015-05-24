<?php

use App\Category;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

class AddFieldsToCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('categories', function(Blueprint $table)
		{
			$table->string('icon')->nullable();
            $table->string('slug', 32);
            $table->string('type')->nullable();
		});
        $categories = Category::all();
        foreach( $categories as $item )
        {
            $item->slug = Str::limit( Str::slug( $item->name), 32, '');
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
		Schema::table('categories', function(Blueprint $table)
		{
			$table->dropColumn(['icon', 'slug', 'type']);
		});
	}

}
