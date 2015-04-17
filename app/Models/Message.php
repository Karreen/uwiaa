<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model {

    use SoftDeletes;

    protected $table = 'messages';

    protected $dates = ['deleted_at'];

	protected $fillable = [
        'content', 'title',
        'alert_id', 'sender_id',
        'receiver_id'
    ];

    public function sender()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function alert()
    {
        return $this->belongsTo('App\Models\Alert');
    }

    public function assignAlert($alert)
    {
        return $this->alert()->attach($alert);
    }

}
