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
		return ORM::factory('store', Kohana::config('store.id'))->name;
	}
	
}