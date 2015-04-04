<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 3/8/2015
 * Time: 5:04 PM
 */

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Auth\Guard;

class PostRepository implements PostRepositoryInterface {

    protected $post, $auth;

    function __construct(Post $post, Guard $auth)
    {
        $this->post = $post;
        $this->auth = $auth;
    }


    public function all()
    {
        return $this->post->all();
    }

    public function find($id)
    {
        return $this->post->findOrFail($id);
    }

    public function create($attributes)
    {
        $post = $this->post->create($attributes);

        $user = $this->auth->user();

        $user->posts()->associate($post);

        $user->save();
    }
}