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
		return view('posts.index')->withPosts($this->post->all());
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

        $post = $this->post->create($request->only('title', 'content'));

		return redirect()->route('posts.show', ['id' => $post->id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $post = $this->post->find($id);

		return view('posts.show')->withPost($post);


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
