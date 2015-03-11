<?php namespace App\Http\Controllers;

use App\Commands\UserLoginCommand;
use App\Events\UserWasSignedIn;
use App\Http\Requests;

use App\Http\Requests\CreateLoginRequest;
use App\Repositories\Interfaces\UserRepositoryInterface as User;
use Illuminate\Support\Facades\Redirect;


class SessionsController extends Controller {

    /**
     * @var User
     */
    protected $user;

    /**
     * @param User $user
     */
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
		return view('sessions.create');
	}


    /**
     * @param CreateLoginRequest $request
     * @return Redirect
     */
    public function store(CreateLoginRequest $request)
	{
        $user = $this->user->login($request->only(['email', 'password']));

        if ($user)
        {
            $this->dispatch(new UserLoginCommand($user));
            return redirect('home');
        }
        return redirect()->back()->withInput();
	}


    /**
     * @param null $id
     * @return Redirect
     */
    public function destroy($id = null)
	{
        $this->user->logout();

        return redirect('home');
	}

}
