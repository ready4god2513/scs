<?php

class Customers_Controller extends Application_Controller
{
	
	protected $excluded_actions = array();
	
	
	/**
	  * Register a new customer
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function create()
	{
		$customer = ORM::factory('customer');
		
		if($customer->register($this->input->post('customername'), $this->input->post('customername'), $this->input->post('password')))
		{
			Auth::instance()->login($this->input->post('customername'), $this->input->post('password'));
			url::redirect($this->input->post('redirect_override', request::referrer()));
		}
		else
		{
			flash::set_error('Unable to register your account');
			url::redirect(request::referrer());
		}
	}

}