<?php

class Order_Model extends ORM
{
	
	protected $has_many = array('order_billing_shippings', 'order_comments', 'order_details', 'order_histories');
	protected $belongs_to = array('customer', 'store');
	protected $sorting = array('created_at' => 'DESC');
	
	// List the valid statuses
	private $valid_statuses = array(
		'new' => 'New',
		'declined' => 'Declined',
		'paid' => 'Paid',
		'shipped' => 'Shipped',
		'complete' => 'Complete',
		'refunded' => 'Refunded'
	);
	
	
	/**
	  * Provide an array of the valid statuses
	  * @developer Brandon Hansen
	  * @date Oct 22, 2010
	  */
	public function get_valid_statuses()
	{
		return $this->valid_statuses;
	}
	
	
	/**
	  * Find the order amount
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function order_amount()
	{
		$subtotal = (float) 0.00;
		
		foreach($this->order_details as $item)
		{
			$subtotal += $item->price;
		}
		
		return (float) $subtotal;
	}
	
	
	/**
	  * Find the billing address for an order
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function get_billing_address()
	{
		return ORM::factory('order_billing_shipping')->where(array(
			'order_id' => $this,
			'type' => 'billing'
		))->find();
	}
	
	
	/**
	  * Find the shipping address for an order
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function get_shipping_address()
	{
		return ORM::factory('order_billing_shipping')->where(array(
			'order_id' => $this,
			'type' => 'shipping'
		))->find();
	}
	
	
	/**
	  * Process the order
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public function process(Cart_Model $cart, $billing, $shipping)
	{
		$this->status = 'new';
		$this->save();
		
		// Create a history entry
		orders::history_entry($this, 'Placed Order');
		
		// Create billing and shipping
		$this->save_billing_and_shipping($billing, $shipping);
		
		// Move the cart to the order
		$this->move_cart_to_order($cart);
		
		// We will attempt to process the credit card at this point
		// If the credit card goes through, then we will change the status to
		// "paid".  We will use "paid" because the next step could either be to ship
		// it out, or if it is a downloadable product, download the product
		$this->status = 'paid';
		$this->save();
		
		// Mark the status as paid in the database
		orders::history_entry($this, 'Payment Confirmed');
		
		
		// Return the order
		return $this;
	}
	
	
	/**
	  * Save the billing and shipping information
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	private function save_billing_and_shipping($billing, $shipping)
	{
		$billing['order_id'] = $this;
		ORM::factory('order_billing_shipping')->create_billing($billing);
		
		$shipping['order_id'] = $this;
		ORM::factory('order_billing_shipping')->create_shipping($shipping);
	}
	
	
	/**
	  * Move the cart items into the order
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	private function move_cart_to_order(Cart_Model $cart)
	{
		// Save the information that is in the cart
		foreach($cart->cart_items as $item)
		{
			ORM::factory('order_detail')->create(array(
				'order_id' => $this,
				'product_id' => $item->product,
				'price' => $item->product_subtotal(),
				'quantity' => $item->quantity
			));
		}
	}

}