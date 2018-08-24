<?php namespace Ari\HitUrl;

class CoreClass
{
	public function hit($url)
	{
		return file_get_contents($url);
	}
}