<?php namespace App\Commands;

use App\Commands\Command;

use App\Events\UserWasSignedIn;
use App\Models\User;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

# SelfHandling commands don;t need a handler command
# not sure about the trade offs
class UserLoginCommand extends Command implements SelfHandling, ShouldBeQueued {
// removed should be queued, a bit unnecessary for this to be simple command

    use SerializesModels, InteractsWithQueue;
    # use SerializesModels if an eloquent model is passed
    # so it can be re-queried on the queue side,
    # else, the queues can become slow

    # InteractsWithQueue allows for advanced command features
    public $user;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
//        dd($this->user);
//        $this->release(30); # delays the command for 30 seconds
//        $this->delete();
//        $this->attempts();
		event(new UserWasSignedIn($this->user));
	}

}
