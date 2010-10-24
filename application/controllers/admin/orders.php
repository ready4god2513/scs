<?php

class Orders_Controller extends Admin_Controller
{
	
	/**
	  * Mark as shipped
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function mark_as_shipped()
	{
		$order = ORM::factory('order', $this->input->post('id'));
		$order->mark_as_shipped();
		url::redirect(request::referrer());
	}
	
	
	/**
	  * Mark as paid
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function mark_as_paid()
	{
		$order = ORM::factory('order', $this->input->post('id'));
		$order->mark_as_paid();
		url::redirect(request::referrer());
	}
	
	
	/**
	  * Mark as complete
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function mark_as_complete()
	{
		$order = ORM::factory('order', $this->input->post('id'));
		$order->mark_as_completed();
		url::redirect(request::referrer());
	}
	
	
	/**
	  * Refund the order
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function refund()
	{
		$order = ORM::factory('order', $this->input->post('id'));
		$order->refund();
		url::redirect(request::referrer());
	}

}