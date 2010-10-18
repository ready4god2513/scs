<?php

class Store_Model extends ORM
{
	
	protected $has_many = array(
		'blogs', 
		'carts', 
		'categories', 
		'coupons',
		'customers',
		'orders',
		'pages',
		'products',
		'tags',
		'themes'
	);
	
	
}