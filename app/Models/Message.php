<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	protected $fillable = [
        'content', 'user_id', 'title', 'urgency'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function alert()
    {
        return $this->belongsTo('App\Models\Alert');
    }
}
