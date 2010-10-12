<?php

class Order_billing_shipping_Model extends ORM
{
	
	protected $belongs_to = array('order', 'user');

}