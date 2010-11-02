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
		$this->cart = cart::get();
	}
	
	
	/**
	  * Add A product to the cart
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function add()
	{
		$product = ORM::factory('product', $this->input->post('product_id'));
		$quantity = $this->input->post('quantity', 1);
		$variant = ORM::factory('variant', $this->input->post('variant_id'));
		
		$this->cart->add_product($product, $variant, $quantity);
		
		url::redirect('cart');
	}
	
	
	/**
	  * Update a product quantity
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function update_quantity()
	{
		$item = ORM::factory('cart_item', $this->input->post('id'));
		$quantity = $this->input->post('quantity');
		$this->cart->update_quantity($item->product, $item->variant, $quantity);
		
		url::redirect('cart');
	}
	
	
	/**
	  * Remove a product from the cart
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function remove()
	{
		$item = ORM::factory('cart_item', $this->input->post('id'));
		$this->cart->remove_product($item);
		
		url::redirect('cart');
	}
	
	
	/**
	  * Add billing information
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function billing()
	{
		$this->template
			->set('content', View::factory('carts/billing'));
	}
	
	
	/**
	  * Process the order
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function process()
	{
		$order = ORM::factory('order');
		$billing = $this->input->post('billing');
		$shipping = $this->input->post('shipping');
		
		if($order->process($this->cart, $billing, $shipping))
		{
			$this->cart->clear_cart();
			url::redirect('orders/show/' . $order);
		}
		else
		{
			url::redirect('cart/billing');
		}
	}

}