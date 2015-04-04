<?php namespace App\Repositories\Interfaces;

interface PostRepositoryInterface {

    public function all();

    public function find($id);

    public function create($attributes);


}