<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model {

	protected $fillable = ['game_id', 'name', 'status'];

    public function game()
    {
       return $this->belongsTo('App\Game');
    }

}
