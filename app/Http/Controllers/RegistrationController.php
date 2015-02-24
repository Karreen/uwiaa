<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateRegistrationRequest;
use App\User;
use Illuminate\Http\Request;
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
        User::create($request);

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
