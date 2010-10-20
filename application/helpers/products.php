<?php

class products_Core
{
	
	
	/**
	  * Find all of the products
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function all()
	{
		return ORM::factory('product')->find_all_no_limit();
	}
	
}