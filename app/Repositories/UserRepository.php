<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 3/7/2015
 * Time: 12:46 PM
 */

namespace App\Repositories;


use App\Models\Profile;
use App\Models\User;
//use App\Repositories\Interfaces\ProfileRepositoryInterface as Profile;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface {

    /**
     * @var User
     */
    /**
     * @var User|Guard
     */
    protected $user, $auth, $profile;

    /**
     * @param User $user
     * @param Profile $profile
     * @param Guard $auth
     */
    function __construct(User $user, Profile $profile, Guard $auth)
    {
        $this->user = $user;
        $this->profile = $profile;
        $this->auth = $auth;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->user->all();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->user->findOrFail($id);
    }

    /**
     * @param $username
     */
    public function whereUsername($username)
    {
        return $this->user
            ->whereUsername($username)
            ->firstOrFail();
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $id
     * @param $attributes
     */
    public function update($id, $attributes)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $attributes
     * @return static
     */
    public function create($attributes)
    {
        $user = $this->user->create($attributes);

        if (Auth::attempt($attributes))
        {
            return $user;
        }
        else
        {
            return null;
        }
    }

    /**
     * @param $credentials
     * @return bool|null
     */
    public function login($credentials)
    {
        if ($this->auth->attempt($credentials))
            return $this->auth->user();
        else
            return null;
    }

    /**
     *
     */
    public function logout()
    {
        $this->auth->logout();
    }

    public function assignRole($role)
    {
        // TODO: Implement assignRole() method.
    }

    public function addRole($role)
    {
        // TODO: Implement addRole() method.
    }

    public function profile()
    {
        return $this->user->profile();
    }

    public function roles()
    {
        return $this->user->roles();
    }

    public function getProfile($username)
    {
        return $this->user
            ->with('profile')
            ->whereUsername($username)
            ->firstOrFail();
    }


    public function updateProfile($attributes)
    {
        $profile = $this->profile->create($attributes);

        $user = $this->user->whereUsername('username')->firstOrFail();

        $user->profile->save($profile);
    }
}