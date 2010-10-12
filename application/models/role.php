<?php

class Role_Model extends Auth_Role_Model
{
	
	protected $has_and_belongs_to = array('users');
	
	
	/**
	  * Set the unique key for the roles
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function unique_key($id = NULL)
	{
		if(!empty($id) && is_string($id) && !ctype_digit($id))
		{
			return 'name';
		}
 
		return parent::unique_key($id);
	}

}