<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {
	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';
	
	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param \Illuminate\Routing\Router $router        	
	 * @return void
	 */
	public function boot(Router $router) {
		parent::boot ( $router );
		// Versione Semplice
		// $router->model('users',\App\User::class);
		
		// se devo fare filtri anche su campi diversi da id
		$router->bind ( 'users', function ($id) {
			return \App\User::where ( 'id', $id )->firstOrFail ();
		} );
		
		$router->bind ( 'articles', function ($id) {
			return \App\Article::where ( 'id', $id )->firstOrFail ();
		} );
	}
	
	/**
	 * Define the routes for the application.
	 *
	 * @param \Illuminate\Routing\Router $router        	
	 * @return void
	 */
	public function map(Router $router) {
		$router->group ( [ 
				'namespace' => $this->namespace 
		], function ($router) {
			require app_path ( 'Http/routes.php' );
		} );
	}
}
