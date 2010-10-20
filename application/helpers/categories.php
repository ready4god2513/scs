<?php

class categories_Core
{
	
	
	/**
	  * Find all of the categories
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function all()
	{
		return ORM::factory('category')->find_all();
	}
	
}