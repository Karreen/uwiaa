<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 2/25/2015
 * Time: 9:26 AM
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model{

    protected $table = 'tags';

    protected $fillable = [
        'name', 'description'
    ];

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}