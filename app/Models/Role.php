<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $table = 'roles';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    # SCOPES

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

    public function scopeMember($query)
    {
        return $query->whereName('member');
    }

    public function scopeStudent($query)
    {
        return $query->whereName('student');
    }

    public function scopeAlumni($query)
    {
        return $query->whereName('alumni');
    }

}
