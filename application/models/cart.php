<?php

class Cart_Model extends ORM
{
	
	protected $belongs_to = array('customer', 'store');
	protected $has_many = array('cart_items');
	protected $load_with = array('cart_items');
	
	
	/**
	  * Clear out the cart
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function clear_cart()
	{
		foreach($this->cart_items as $item)
		{
			$item->delete();
		}
		
		$this->delete();
	}
	
	
	/*
	 * Find out how many items are in the customer's cart
	 * @Developer Brandon Hansen
	 * @Date October 11, 2010
	 */
	public function cart_contents_count()
	{
		$count = 0;
		
		foreach($this->cart_items as $cart_item)
		{
			$count += $cart_item->quantity;
		}
		
		return $count;
	}
	
	
	/**
	  * Get the cart subtotal
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function subtotal()
	{
		$subtotal = (float) 0.00;
		
		foreach($this->cart_items as $cart_item)
		{
			$subtotal += $cart_item->product_subtotal();
		}
		
		return (float) $subtotal;
	}
	
	
	/**
	  * Add a product to the cart. This will update the quantity if the customer already has
	  * one in their cart
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function add_product(Product_Model $product, $variant, $quantity = 1)
	{
		return $this->update_quantity($product, $variant, $quantity, true);
	}
	
	
	/**
	  * Remove a product from the cart
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function remove_product(Cart_Item_Model $item)
	{
		$item->delete_all_by_product_and_cart();
	}
	
	
	/**
	  * Update a product quantity
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function update_quantity(Product_Model $product, Variant_Model $variant, $quantity = 1, $add = false)
	{
		$cart_item = ORM::factory('cart_item')
			->where('product_id', $product)
			->where('cart_id', $this)
			->where('variant_id', $variant)
			->find();
			
		// If we are adding, combine the two orders
		if($add)
		{
			$quantity += $cart_item->quantity;
		}
		
		if($quantity < 1)
		{
			return $this->remove_product($cart_item);
		}
			
		$cart_item->cart_id = $this;
		$cart_item->product_id = $product;
		$cart_item->quantity = $quantity;
		$cart_item->variant_id = $variant;
		$cart_item->save();
	}

}