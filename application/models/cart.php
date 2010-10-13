<?php

class Cart_Model extends ORM
{
	
	protected $belongs_to = array('user');
	protected $has_many = array('cart_items');
	protected $load_with = array('cart_items');
	
	
	/*
	 * Find out how many items are in the user's cart
	 * @Developer Brandon Hansen
	 * @Date October 11, 2010
	 */
	public function cart_contents_count()
	{
		return count($this->cart_items);
	}
	
	
	/**
	  * Get the cart subtotal
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function subtotal()
	{
		$subtotal = 0;
		foreach($this->cart_items as $cart_item)
		{
			$subtotal += $cart_item->product_subtotal();
		}
		
		return number_format($subtotal, 2);
	}

}