<?php defined('SYSPATH') or die('No direct script access.');

class ssl_Core 
{
	
	/**
	 * Force the page to be output over ssl
	 * @Developer Brandon Hansen
	 * @Date April 19, 2010
	 */
	public static function force_ssl() 
	{
		if ($_SERVER['SERVER_PORT'] != self::https_port()) 
		{
			url::redirect(url::site(url::current(),'https'));
		}
	}
	
	
	/**
	 * Return the port that this environment is using for secure.  On the dev boxes, this is going to be port 80
	 * @Developer Brandon Hansen
	 * @Date April 19, 2010
	 * @Return (string)
	 */
	public static function https_port() 
	{
		if (Kohana::config('config.https') == 'https') 
		{
			return '443';
		} 
		else 
		{
			return '80';
		}
	}

}