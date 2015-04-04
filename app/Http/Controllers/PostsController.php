<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Requests\CreatePostRequest;
use App\Repositories\Interfaces\PostRepositoryInterface as Post;

class PostsController extends Controller {

    protected $post;

    function __construct(Post $post)
    {
        $this->middleware('auth', ['only' => ['store']]);

        $this->post = $post;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//        return 'index';
		return view('posts.index')->withPosts(Post::paginate(10));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posts.create');
	}


    /**
     * @param CreatePostRequest $request
     * @return string
     */
    public function store(CreatePostRequest $request)
	{
        dd($request->only('title', 'content'));
		return 'store';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return 'show';
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'edit';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'update';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'destroy';
	}

}
