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
		'sections',
		'tags',
		'themes'
	);
	
	// Set the active theme for the store
	protected $has_one = array('active_theme_id' => 'theme');
	
	
}