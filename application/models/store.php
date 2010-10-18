<?php

class Store_Model extends ORM
{
	
	protected $has_many = array(
		'blogs', 
		'carts', 
		'categories', 
		'coupons',
		'customers',
		'emails',
		'orders',
		'pages',
		'products',
		'tags',
		'themes'
	);
	
	
}