<?php

class Cart_item_Model extends ORM
{
	
	protected $belongs_to = array('cart', 'product');
	
	
	/**
	  * Ensure that the rules are always followed
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function __set($key = NULL, $value = NULL)
	{
		if($key == 'quantity')
		{
			// Make sure that we always have a positive integer
			$value = max(1, (int) $value);
		}
		
		parent::__set($key, $value);
	}
	
	
	/**
	  * Calculate a product subtotal
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function product_subtotal()
	{
		return (float) round($this->quantity * $this->product->price, 2);
	}
	
	
	/**
	  * Find by cart and product
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function find_by_product_and_cart(Product_Model $product, Cart_Model $cart)
	{
		return $this
			->where('product_id', $product)
			->where('cart_id', $cart)
			->find();
	}
	
	
	/**
	  * Delete the product from the cart
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function delete_all_by_product_and_cart(Product_Model $product, Cart_Model $cart)
	{
		return $this
			->where('product_id', $product)
			->where('cart_id', $cart)
			->delete_all();
	}

}