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
		$domain = str_replace('.scs', '', $_SERVER['SERVER_NAME']);
		$store = ORM::factory('store')->where('domain', $domain)->find();
		Kohana::config_set('store.id', (string) $store);
	}
	
}