<?php

class Variant_Model extends ORM
{
	
	protected $belongs_to = array('product');
	protected $has_many = array('options_variant', 'order_details', 'cart_items');
	
	/**
	  * Don't make the user type in anything more than pseudo property names
	  * @developer Brandon Hansen
	  * @date Nov 1, 2010
	  */
	public function __get($key)
	{
		if($key == 'name')
		{
			return $this->variant_title();
		}
		
		
		return parent::__get($key);
	}
	
	/**
	  * Check to see if the product is in stock
	  * @developer Brandon Hansen
	  * @date Oct 30, 2010
	  */
	public function in_stock_count()
	{
		if($this->track_stock)
		{
			return $this->stock;
		}
		else
		{
			return '&infin;';
		}
	}
	
	
	/**
	  * Get the title of the variant
	  * @developer Brandon Hansen
	  * @date Nov 1, 2010
	  */
	public function variant_title()
	{
		$title = array();
		
		foreach($this->options_variant as $option)
		{
			$title[] = $option->value;
		}
		
		return implode(' / ', $title);
	}
	
	
	/**
	  * Create a blank variant for a product
	  * @developer Brandon Hansen
	  * @date Nov 1, 2010
	  */
	public function create_blank(Product_Model $product)
	{
		$this->product_id = $product;
		$this->save();
		
		foreach($product->options as $option)
		{
			ORM::factory('options_variant')->create(array(
				'option_id' => $option,
				'variant_id' => $this,
				'value' => 'Default ' . $option->name
			));
		}
	}
	
}