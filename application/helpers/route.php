<?php

class route_Core
{
	
	
	/**
	  * Add routes for products
	  * @Developer brandon
	  * @Date Oct 19, 2010
	  */
	public static function route_products_and_categories()
	{
		foreach(ORM::factory('product')->find_all() as $object)
		{
			Kohana::config_set('routes.' . $object->show_path(false), inflector::plural($object->object_name) . '/show/' . $object);
		}
		
		foreach(ORM::factory('category')->find_all() as $object)
		{
			Kohana::config_set('routes.' . $object->show_path(false), inflector::plural($object->object_name) . '/show/' . $object);
		}
	}
	
}