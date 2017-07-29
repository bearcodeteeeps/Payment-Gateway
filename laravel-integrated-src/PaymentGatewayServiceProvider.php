<?php

namespace Lloricode\PaymentGateway;

use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
	/**
	* Bootstrap the application services.
	*
	* @return void
	*/
	public function boot()
	{ 
		$this->publishes([
			__DIR__.'/../laravel-integrated-config' => base_path('/config/'),
		]);
		$this->loadMigrationsFrom(__DIR__.'/../laravel-integrated-migration');
	}

	/**
	* Register the application services.
	*
	* @return void
	*/
	public function register()
	{
		$this->app->singleton('lloricodepaymentGateway', function ($app) {
 			return new IntegrateSource;
 		});
	}
}