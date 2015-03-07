<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 3/7/2015
 * Time: 12:46 PM
 */

namespace app\Repositories;


use App\Models\User;

class UserRepository implements \UserRepositoryInteferface {

    private $users;

    function __construct(User $users)
    {
        $this->users = $users;
    }

    public function getAll()
    {
        return $this->users->all();
    }


    public function find($id)
    {
        return $this->users->findOrFail($id);
    }
}