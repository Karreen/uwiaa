<?php namespace App\Handlers\Events;

use App\Events\UserWasSignedIn;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class UpdateUserLastLogin {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserWasSignedIn  $event
	 * @return void
	 */
	public function handle(UserWasSignedIn $event)
	{
		dd($event);
	}

}
