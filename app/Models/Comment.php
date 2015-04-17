<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    protected $table = 'comments';

    /**
     * @var array
     */
    protected $fillable = [
        'content', 'user_id', 'post_id'
    ];

    public function scopeForPost($query, $post_id)
    {
        return $query->wherePostId($post_id);
    }

    /**
     * One-to-Many self join
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    /**
     * Many-to-One relationship with Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    /**
     * Many-to-One relationship with User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
