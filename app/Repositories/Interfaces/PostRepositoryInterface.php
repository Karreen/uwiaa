<?php namespace App\Repositories\Interfaces;

interface PostRepositoryInterface {

    public function all();

    public function find($id);

    public function create($attributes);

    public function getComments($post_id);

    public function addComment($message, $post_id);
}