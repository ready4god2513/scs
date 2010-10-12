<?php

class User_Model extends Auth_User_Model
{
	
	protected $has_one = array('cart');
	protected $has_many = array('orders', 'user_addresses', 'order_billing_shippings');
	protected $has_and_belongs_to = array('roles');
	
	
	/**
	  * Set the unique key
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function unique_key($id = NULL)
	{
		if(!empty($id) && is_string($id) && !ctype_digit($id))
		{
			return 'username';
		}
 
		return parent::unique_key($id);
	}
	
	
	/**
	  * Hash passwords
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function __set($key = NULL, $value = NULL)
	{
		if($key == 'password')
		{
			$value = Auth::instance()->hash_password($value);
		}
		
		parent::__set($key, $value);
	}
	
	
	/**
	  * Register the user
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function register($email = NULL, $username = NULL, $password = NULL)
	{
		$this->email = $email;
		$this->username = $username;
		$this->password = $password;
		
		return $this->add(ORM::factory('role', 'login')) && $this->save();
	}

}