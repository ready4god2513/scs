<?php

class route_Core
{
	

	/**
	  * Add routes for categories
	  * @Developer brandon
	  * @Date Oct 19, 2010
	  */
	public static function route_categories()
	{
		foreach(ORM::factory('category')->find_all() as $category)
		{
			Kohana::config_set('routes.' . $category->show_path(false), 'categories/show/' . $category);
		}
	}
	
	
}