<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'street', 'city', 'parish', 'bio',
        'github_username'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeKingston($query)
    {
        return $query->whereParish('Kingston');
    }

}
