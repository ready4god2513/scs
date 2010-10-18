<?php

class Customer_Model extends Auth_User_Model
{
	
	protected $has_one = array('cart');
	protected $has_many = array('orders', 'customer_addresses', 'order_billing_shippings');
	protected $has_and_belongs_to = array('roles');
	protected $belongs_to = array('store');
	protected $validates_exclusion_of = array('id');
	
	
	/**
	  * Set the unique key
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function unique_key($id = NULL)
	{
		if(!empty($id) && is_string($id) && !ctype_digit($id))
		{
			return 'customername';
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
	  * Register the customer
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function register($email = NULL, $customername = NULL, $password = NULL)
	{
		$this->email = $email;
		$this->customername = $customername;
		$this->password = $password;
		
		return $this->add(ORM::factory('role', 'login')) && $this->save();
	}

}