<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Capture extends Model {

	protected $fillable = ['game_id', 'name'];

    /**
     * Capture belong to a game.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function game()
    {
       return $this->belongsTo('App\Game');
    }

}
