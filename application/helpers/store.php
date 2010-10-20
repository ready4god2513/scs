<?php

class store_Core
{
	
	
	/**
	  * Find the store name
	  * @Developer brandon
	  * @Date Oct 18, 2010
	  */
	public static function name()
	{
		return self::get()->name;
	}
	
	/**
	  * Find store
	  * @Developer brandon
	  * @Date Oct 18, 2010
	  */
	public static function get()
	{
		return ORM::factory('store', Kohana::config('store.id'));
	}
	
	
	/**
	  * Set the store
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function set()
	{
		list($subdomain, $rest) = explode('.', $_SERVER['SERVER_NAME'], 2);
		$store = ORM::factory('store')->where('domain', $subdomain)->find();
		
		if($store->loaded)
		{
			Kohana::config_set('store.id', (string) $store);
		}
		else
		{
			Missing_Page::missing_shop();
		}
	}
	
}