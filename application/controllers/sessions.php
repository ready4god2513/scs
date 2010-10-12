<?php

class Sessions_Controller extends Application_Controller
{
	
	protected $excluded_actions = array('edit', 'update');
	
	/**
	  * Set the title for the sessions
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function __construct()
	{
		parent::__construct();
		meta::set_title('Login or Register');
	}
	
	
	/**
	  * Don't let the user on the login page if they are already authenticated
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function new_one()
	{
		if(user::logged_in())
		{
			url::redirect(url::site());
		}
		
		parent::new_one();
	}
	
	
	/**
	  * Log the user in
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function create()
	{
		if(Auth::instance()->login($this->input->post('username'), $this->input->post('password')))
		{
			url::redirect($this->input->post('redirect_override', request::referrer()));
		}
		else
		{
			flash::set_error('Unable to log in');
			url::redirect(request::referrer());
		}
	}
	
}