<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Requests\CreateRegistrationRequest;
use App\Models\Role;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller {

    private $user;

    function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

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

        $user = $this->user->create($request->only('username', 'email', 'password'));
//
//        $member = Role::whereName('member')->first()->get();
//        $alumni = Role::whereName('alumni')->first()->get();
//
//        $user->assignRole($member);
//        $user->assignRole($alumni);

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

        $user = User::whereConfirmationCode($confirmationCode)->first();
    }
}
