<?php namespace App\Events;

use App\Events\Event;

use App\Models\User;
use DateTime;
use Illuminate\Queue\SerializesModels;

class UserWasSignedIn extends Event {

	use SerializesModels;

    public $user;

    /**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
        $this->user->last_login = new DateTime;
        $this->user->save();
	}

}
