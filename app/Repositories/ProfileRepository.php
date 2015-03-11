<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 3/8/2015
 * Time: 4:00 PM
 */

namespace App\Repositories;

use App\Models\Profile;
use App\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface {

    protected $profile;

    function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function update($id, $attributes)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function create($attributes)
    {
        $this->profile->create($attributes);
    }
}