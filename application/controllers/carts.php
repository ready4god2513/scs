<?php

class Carts_Controller extends Application_Controller
{
	
	
	/**
	  * Set the title for the cart
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function __construct()
	{
		parent::__construct();
		meta::set_title('Shopping Cart');
	}
	
	
	/**
	  * Add A product to the cart
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function add()
	{
		$product = ORM::factory('product', $this->input->post('product_id'));
		$quantity = $this->input->post('quantity');
		customer::current()->cart->add_product($product, $quantity);
		
		url::redirect('cart');
	}
	
	
	/**
	  * Update a product quantity
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function update_quantity()
	{
		$product = ORM::factory('product', $this->input->post('product_id'));
		$quantity = $this->input->post('quantity');
		customer::current()->cart->update_quantity($product, $quantity);
		
		url::redirect('cart');
	}
	
	
	/**
	  * Remove a product from the cart
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function remove()
	{
		$product = ORM::factory('product', $this->input->post('product_id'));
		$quantity = $this->input->post('quantity');
		customer::current()->cart->remove_product($product);
		
		url::redirect('cart');
	}

}