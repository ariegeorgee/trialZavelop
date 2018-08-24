<?php namespace Ari\HitUrl;

use Illuminate\Support\Facades\Facade;

class HitUrlFacade extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'core-class-hit-url';
	}
}
