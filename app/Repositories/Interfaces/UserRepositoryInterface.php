<?php namespace App\Repositories\Interfaces;

interface UserRepositoryInterface {

    public function all();

    public function find($id);

    public function whereUsername($username);

    public function delete($id);

    public function update($id, $attributes);

    public function create($attributes);

    public function login($credentials);

    public function logout();

    /*
     * Profiles relation queries
     */
//    public function profile();
//
//
//    public function getProfile($username);
//
    public function updateProfile($username, $attributes);
//
    /*
     * Role relation queries
     */
    public function addRole($role);

    public function roles();

}