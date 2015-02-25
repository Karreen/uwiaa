<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRegistrationRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'username'  => 'required|min:3|unique:users',
            'email'     => 'required|email',
            'password'  => 'required|min:8|confirmed'
		];
	}

}
