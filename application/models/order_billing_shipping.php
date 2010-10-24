<?php

class Order_billing_shipping_Model extends ORM
{
	
	protected $table_name = 'order_billing_shipping';
	protected $belongs_to = array('order');
	protected $validates_presence_of = array(
		'order_id',
		'type',
		'first_name',
		'last_name',
		'address',
		'city',
		'postal_code',
		'country'
	);
	
	
	/**
	  * Create billing information
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function create_billing($info)
	{
		$info['type'] = 'billing';
		$this->create($info);
	}
	
	
	/**
	  * Create shipping information
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function create_shipping($info)
	{
		$info['type'] = 'shipping';
		$this->create($info);
	}

}