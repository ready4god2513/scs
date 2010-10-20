<?php

class links_Core
{
	
	/**
	  * Find the main links
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function get($key = NULL)
	{
		return ORM::factory('section')->where('name', $key)->find()->links;
	}
	
}