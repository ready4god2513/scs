<?php

class theme_Core
{
	
	
	/**
	  * Get a setting from the database
	  * @developer Brandon Hansen
	  * @date Oct 13, 2010
	  */
	public static function get()
	{
		$theme = ORM::factory('theme')->where('status', 'active')->find();
		return $theme->name;
	}
	
	
	/**
	  * Static file path
	  * @developer Brandon Hansen
	  * @date Oct 13, 2010
	  */
	public static function static_file_path()
	{
		return url::site('public/themes/' . self::get());
	}
	
	
}