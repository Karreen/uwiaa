<?php
/**
 * Created by PhpStorm.
 * User: Shane
 * Date: 3/8/2015
 * Time: 5:04 PM
 */

namespace App\Repositories;

use App\Models\Comment;
use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Auth\Guard;

class PostRepository implements PostRepositoryInterface {

    protected $post;
    protected $comment;
    protected $auth;

    function __construct(Post $post, Comment $comment, Guard $auth)
    {
        $this->post = $post;
        $this->comment = $comment;
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

//        $post = $this->post->create($attributes);
//
        $post = new Post($attributes);

        $user = $this->auth->user();

        $user->posts()->save($post);

        return $post;

    }

    public function getComments($post_id)
    {
        return $this->comment->forPost($post_id)->with('user', 'post')->get();
    }

    public function addComment($message, $post_id)
    {
        $post = $this->post->find($post_id);
        $user = $this->auth->user();


        $comment = new Comment($message);

//            $post->comments()->save($comment);
        $comment->post()->associate($post);
        $comment->user()->associate($user);
        $comment->save();

        return $comment;

    }
}