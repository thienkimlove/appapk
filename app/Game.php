<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Game extends Model {

	protected $fillable = ['link','site','icon', 'title', 'category_id', 'total', 'desc', 'news', 'update', 'version', 'require', 'download', 'type'];

    /**
     * When title change then slug will change.
     * @param $title
     */
    public function setTitleAttribute($title)
    {
       $this->attributes['title'] = $title;
       $this->attributes['slug'] =  Str::limit( Str::slug($title), 32, '');
    }

    /**
     * like tags.
     * @param $query
     * @param $tag
     * @return mixed
     */
    public function scopeTagged($query, $tag)
    {
        if (strlen($tag) > 2) {
            $query->where('title', 'LIKE', '%'.$tag.'%');
        }
    }

    /**
     * games belong to category.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
       return $this->belongsTo('App\Category');
    }

    /**
     * app have many captures.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function captures()
    {
        return $this->hasMany('App\Capture');
    }
    /**
     * app have many packages.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function package()
    {
        return $this->hasOne('App\Package');
    }
}
