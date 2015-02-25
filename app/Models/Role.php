<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }


    /**
     * The scope of an administrator
     *
     * @param $query
     * @return mixed
     */
    public function scopeAdmin($query)
    {
        return $query->whereName('admin');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeMentor($query)
    {
        return $query->whereName('mentor');
    }
}
