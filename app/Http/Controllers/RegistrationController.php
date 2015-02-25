<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Requests\CreateRegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('registration.create');
	}

    /**
     * @param CreateRegistrationRequest $request
     * @return mixed
     */
    public function store(CreateRegistrationRequest $request)
	{
//        dd($request->only('username', 'email', 'password', 'password_confirmation'));
        User::create($request->only('username', 'email', 'password', 'password_confirmation'));

        return Redirect::home();
	}

    /**
     * @param $confirmationCode
     * @return string
     */
    public function confirm($confirmationCode)
    {
        if (! $confirmationCode)
            return 'nope';

        $user = User::whereConfirmationCode($confirmationCode)-first();
    }
}
