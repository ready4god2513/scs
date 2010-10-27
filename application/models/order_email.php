<?php

class Order_email_Model extends ORM
{

	protected $belongs_to = array('order');
	
	
	/**
	  * Send the receipt to the user
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function send_receipt(Order_Model $order)
	{
		$order->store->email->send_order_confirmation($order);
		orders::history_entry($order, 'Sent Receipt to Customer');
	}
	
	
	/**
	  * Send the notification to the store owner
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function send_order_notification(Order_Model $order)
	{
		orders::history_entry($order, 'Sent Order Notification');
	}
	
	
	/**
	  * Send shipping notice to the user
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function send_shipping(Order_Model $order)
	{
		orders::history_entry($order, 'Sent Shipping Status to Customer');
	}
	
	
	/**
	  * Send order completed notice to the user
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function send_order_completed(Order_Model $order)
	{
		orders::history_entry($order, 'Sent Order Complete Email to Customer');
	}
	
	
	/**
	  * Send a refund notice
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function send_refund(Order_Model $order)
	{
		orders::history_entry($order, 'Sent Refund Notice to Customer');
	}
	
	
	/**
	  * Send a custom e-mail to the user
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function send_custom(Order_Model $order)
	{
		orders::history_entry($order, 'Sent Email to Customer');
	}
	
}