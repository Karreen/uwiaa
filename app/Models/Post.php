<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $table = 'posts';

	protected $fillable = [
        'user_id', 'title', 'content',
        'image', 'user_id', 'summary'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }


}
