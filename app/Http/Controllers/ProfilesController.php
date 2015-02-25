<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class ProfilesController extends Controller
{

    function __construct()
    {
        $this->middleware('auth', ['only' => ['edit', 'update']]);
        $this->middleware('auth.current', ['except' => ['show']]);
//        $this->middleware('auth', ['except' => 'login']);
    }

    public function show($username)
    {
        $user = User::with('profile')->whereUsername($username)->firstOrFail();

//        dd($user->toArray());

        return view('profiles.show')->withUser($user);
    }

    public function edit($username)
    {
        $user = User::whereUsername($username)->firstOrFail();

        return view('profiles.edit')->withUser($user);
    }

    public function update($username, CreateProfileRequest $request)
    {
//        dd($request->all());

        $profile = new Profile($request->only('street', 'city', 'bio', 'github_username'));

        $user = User::whereUsername($username)->firstOrFail();

        $user->profile()->save($profile);

//        $user->profile->fill($request->only('street', 'city', 'bio', 'github_username' ))->save();

        return new RedirectResponse(url('/profiles/' . $username));
    }
}
