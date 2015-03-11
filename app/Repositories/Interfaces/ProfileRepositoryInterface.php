<?php namespace App\Repositories\Interfaces;

interface ProfileRepositoryInterface{

    public function find($id);

    public function update($id, $attributes);

    public function delete($id);

    public function create($attributes);


}