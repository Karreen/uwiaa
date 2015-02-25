<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = [
        'user_id', 'title', 'body',
        'image'
    ];

    public function tags()
    {
        return $this->hasMany('')
    }
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

}
