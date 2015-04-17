<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model {

    protected $table = 'alerts';

	protected $fillable = [
        'name', 'description'
    ];

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

    public function scopeEmergency($query)
    {
        return $query->whereName('emergency');
    }

    public function scopeNormal($query)
    {
        return $query->whereName('normal');
    }
}
