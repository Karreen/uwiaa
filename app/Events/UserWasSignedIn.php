<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserWasSignedIn extends Event {

	use SerializesModels;

    public $userid;

    /**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($userid)
	{
		$this->userid = $userid;
	}

}
