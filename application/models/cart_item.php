<?php

class Cart_item_Model extends ORM
{
	
	protected $belongs_to = array('cart', 'product');
	
	
	
	/**
	  * Calculate a product subtotal
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function product_subtotal()
	{
		return number_format($this->quantity * $this->product->price, 2);
	}

}