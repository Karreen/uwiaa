<?php namespace App\Http\Controllers;

use App\Http\Requests;

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

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($username)
    {
        $user = User::with('profile')->whereUsername($username)->firstOrFail();

        dd($user->toArray());

        return view('profiles.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($username)
    {
        $user = User::whereUsername($username)->firstOrFail();

        return view('profiles.edit')->withUser($user);
    }


    /**
     * @param $username
     * @param CreateProfileRequest $request
     */
    public function update($username, CreateProfileRequest $request)
    {
        dd($request->all());

        $user = User::whereUsername($username)->firstOrFail();

        $user->profile->fill($request->only('street', 'city', 'bio', 'github_username' ))->save();

        return new RedirectResponse(url('/home'));
    }
}
