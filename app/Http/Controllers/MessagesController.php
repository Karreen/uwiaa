<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMessageRequest;
use App\Models\User;
use App\Repositories\Interfaces\MessageRepositoryInterface as Message;
use Illuminate\Contracts\Auth\Guard;


class MessagesController extends Controller {

    protected $message;
    protected $auth;
    protected $user;

    function __construct(Message $message, Guard $auth, User $user)
    {
        $this->middleware('auth.current', ['only' => ['index']]);
        $this->message = $message;
        $this->auth = $auth;
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $request
     * @param $username
     * @param Guard $auth
     * @return \Illuminate\View\View
     */
    public function index($username)
	{
        $user = $this->user->whereUsername($username)->first();

        $messages = User::has('receiver')->get();

        foreach ($user->receiver as $message)
            echo $message;

//        dd($messages);
//        return view('messages.index')->withMessages($this->auth->user()->receiver());

        return view('messages.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
     * @param $request
	 * @return Response
	 */
	public function create($request)
	{
        return view('messages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param $username
     * @param $request
	 * @return Response
	 */
	public function store($username, CreateMessageRequest $request)
	{
        $receiver_username = $request->only(['username']);
        $attributes = $request->only(['title', 'content']);

        $message = $this->message->create($receiver_username, $attributes);

        dd($message);

        return redirect()->route('messages.index');
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
		return $this->message->delete($id);
	}

}
