<?php

class Users_Controller extends Application_Controller
{
	
	protected $excluded_actions = array();
	
	
	/**
	  * Register a new user
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function create()
	{
		$user = ORM::factory('user');
		
		if($user->register($this->input->post('username'), $this->input->post('username'), $this->input->post('password')))
		{
			Auth::instance()->login($this->input->post('username'), $this->input->post('password'));
			url::redirect($this->input->post('redirect_override', request::referrer()));
		}
		else
		{
			flash::set_error('Unable to register your account');
			url::redirect(request::referrer());
		}
	}

}