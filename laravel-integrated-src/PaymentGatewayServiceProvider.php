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
			__DIR__.'/../config' => base_path('/config/'),
		]);
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