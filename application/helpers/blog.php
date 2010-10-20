<?php

class blog_Core
{
	
	/**
	  * Find the latest entry
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function latest_entry_synopsis()
	{
		return ORM::factory('blog')->get_latest_entry_synopsis();
	}
	
	
	/**
	  * Find all of the entries
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function all()
	{
		return ORM::factory('blog')->find_all_no_limit();
	}
	
}