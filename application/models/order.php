<?php

class Order_Model extends ORM
{
	
	protected $has_many = array('order_billing_shippings', 'order_comments', 'order_details');
	protected $belongs_to = array('customer');

}