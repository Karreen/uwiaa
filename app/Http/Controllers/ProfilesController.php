<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Repositories\Interfaces\UserRepositoryInterface as User;
use App\Http\Requests\CreateProfileRequest;
use Illuminate\Http\RedirectResponse;

class ProfilesController extends Controller
{

    protected $user;

    function __construct(User $user)
    {
        $this->middleware('auth', ['only' => ['edit', 'update']]);
        $this->middleware('auth.current', ['except' => ['show']]);
//        $this->middleware('auth', ['except' => 'login']);

        $this->user = $user;
    }

    public function show($username)
    {

        $user = $this->user->getProfile($username);

        return view('profiles.show')->withUser($user);
    }

    public function edit($username)
    {
        $user = $this->user->whereUsername($username);

        return view('profiles.edit')->withUser($user);
    }

    public function update($username, CreateProfileRequest $request)
    {

        $this->user->updateProfile($username, $request->only('street', 'city', 'bio', 'github_username', 'twitter_username'));

        return new RedirectResponse(url('/profiles/' . $username));
    }
}
