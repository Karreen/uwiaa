<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Requests\CreateRegistrationRequest;
use App\Repositories\Interfaces\UserRepositoryInterface as User;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller {

    private $user;

    function __construct(User $user)
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

//        if ($user)
//        {
//            $user->addRole('member');
//        }
//        $this->user->assignRole('alumni');
//        $this->user->save();

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
