<?php

abstract class Admin_Controller extends Application_Controller
{
	
	protected $base_route = '/admin/';
	protected $excluded_actions = array();
	
	
	/**
	  * Require administrator login
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function __construct()
	{
		parent::__construct();
		
		$this->template = View::factory('layouts/admin');
		
		// Set the route for updating and creating files
		Kohana::config_set('routes.base_crud_route', 'admin/');
		
		// Require an admin login if we are in production.
		if(IN_PRODUCTION)
		{
			user::require_admin_login();	
		}
	}
	
}