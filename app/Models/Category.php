<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 4/16/2015
 * Time: 11:14 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

}