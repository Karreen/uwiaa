<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);

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

        $this->app->bind(
            'App\Repositories\Interfaces\MessageRepositoryInterface',
            'App\Repositories\MessageRepository'
        );
	}

}
