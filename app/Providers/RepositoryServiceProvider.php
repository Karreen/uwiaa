<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
//     */
//    protected $defer = true;

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
            'App\Repositories\Interfaces\UserRepositoryInterface',
            'App\Repositories\UserRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\ProfileRepositoryInterface',
            'App\Repositories\ProfileRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\RoleRepositoryInterface',
            'App\Repositories\RoleRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\PostRepositoryInterface',
            'App\Repositories\PostRepository'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\CommentRepositoryInterface',
            'App\Repositories\CommentRepository'
        );
	}
}
