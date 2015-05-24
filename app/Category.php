<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model {

	protected $fillable = ['name', 'icon', 'type'];

    /**
     * Category have many games.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
       return $this->hasMany('App\Game');
    }

    /**
     * When title change then slug will change.
     * @param $name
     * @internal param $title
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] =  Str::limit( Str::slug($name), 32, '');
    }

}
