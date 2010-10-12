<?php

class User_Model extends ORM
{
	
	protected $has_one = array('cart');
	protected $has_many = array('orders', 'user_addresses', 'order_billing_shippings');
	protected $has_and_belongs_to = array('roles');

}