<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;

class CommentController extends Controller {

    protected $post;
    protected $comment;

    function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($post_id)
	{
        return $this->post->getComments($post_id)->toArray();
//		return Comment::all();
	}

    /**
     * @param $post_id
     * @param CreateCommentRequest $request
     * @return Comment
     */
    public function create()
	{

        return 'got comment';
//        return response()->json(['sent' => $request]);
//        return $request;
	}


    /**
     * Store a newly created resource in storage.
     *
     * @param $post_id
     * @param CreateCommentRequest $request
     */
    public function store($post_id, CreateCommentRequest $request)
	{
        $comment = $this->post->addComment($request->only('content'), $post_id);

        return $comment->toJson();


//        $post = $this->post->find($post_id);
//		return $post->toJson();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
