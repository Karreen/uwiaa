<?php namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class AdminAuthenticate {

    protected $auth;

    function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if (! $this->auth->check()) // if the user is not logged in
        {
            return redirect()->guest('admin/login');
        }
        else if ($this->auth->user()->role() != Role::whereName('admin')) // the user is not a =n admin
        {
            return redirect()->guest('home');
        }

		return $next($request);
	}

}
