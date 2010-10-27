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
		'sections',
		'tags',
		'themes'
	);
	
	// Set the active theme for the store
	protected $has_one = array('active_theme_id' => 'theme', 'email');
	
	
	
	/**
	  * Find the total income for the store
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function total_income()
	{
		$total = 0;
		
		foreach($this->orders as $order)
		{
			$total += $order->order_amount();
		}
		
		return $total;
	}
	
	
	
	/**
	  * Find the total income for the store per day (average)
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function income_per_day_average()
	{
		return $this->total_income() / (date::dateDiff($this->created_at, date('Y-m-d')));
	}
	
}