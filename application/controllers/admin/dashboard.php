<?php

class Dashboard_Controller extends Admin_Controller
{
	
	// Kind of a lame controller, since it doesn't really relate directly to an object
	// but sometimes it has got to be that way
	// Only allow the index method, as that is all that is needed
	// Allowing any other method will not have adverse effects, but it is just easier to see
	// what is going on by having the restricted actions
	protected $excluded_actions = array('edit', 'update', 'new_one', 'create', 'delete', 'show');
	
	
	/**
	  * Give a general overview of the store
	  * @developer Brandon Hansen
	  * @date Oct 15, 2010
	  */
	public function index()
	{
		meta::set_title('Store Dashboard');
		
		$this->template
			->set('content', View::factory('admin/dashboard/index')
				->set('orders', ORM::factory('order')->find_recent())
				->set('customers', ORM::factory('customer')->find_recent())
			);
	}
	
}