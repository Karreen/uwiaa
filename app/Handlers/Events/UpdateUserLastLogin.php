<?php namespace App\Handlers\Events;

use App\Events\UserWasSignedIn;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class UpdateUserLastLogin implements ShouldBeQueued{

    use InteractsWithQueue;

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
//        $this->release(30); // releases event back on to queue
//		$this->delete(); // deletes from queue
//        dd($event);
	}

}

