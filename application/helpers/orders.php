<?php

class orders_Core
{
	
	
	/**
	  * Create a history entry
	  * @developer Brandon Hansen
	  * @date Oct 17, 2010
	  */
	public static function history_entry(Order_Model $order, $entry = NULL)
	{
		ORM::factory('order_history')->create(array(
			'order_id' => $order,
			'status' => $entry
		));
	}
	
	
}