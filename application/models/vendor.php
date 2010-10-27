<?php

class Vendor_Model extends ORM
{
	
	protected $belongs_to = array('store');
	protected $has_many = array('products');

}