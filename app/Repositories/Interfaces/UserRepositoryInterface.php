<?php

interface UserRepositoryInterface {

    public function getAll();

    public function find($id);

    public function findByName($name);

    public function delete($id);

    public function update($id, $attributes);

    public function create($attributes);
}