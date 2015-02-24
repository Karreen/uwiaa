<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateLoginRequest;
use Illuminate\Http\Request;

class SessionsController extends Controller {

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
     */
    public function store(CreateLoginRequest $request)
	{
        if (Auth::attempt($request))
        {
            return Redirect::intended('/');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

        return Redirect::home();
	}

}
