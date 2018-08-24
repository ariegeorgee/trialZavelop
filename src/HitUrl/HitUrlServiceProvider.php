<?php namespace Ari\HitUrl;

use Illuminate\Support\ServiceProvider;
use Ari\HitUrl\CoreClass;

class HitUrlServiceProvider extends ServiceProvider
{
	public function boot()
	{

	}

	public function register()
	{
		$this->app->bind('core-class-hit-url',function(){
			return new CoreClass();
		});

	}
}