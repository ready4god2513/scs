<?php

abstract class Admin_Controller extends Crud_Controller
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
		
		meta::set_title(store::name() . ' | Admin | ' . ucwords(Router::$controller));
		
		// Set the route for updating and creating files
		Kohana::config_set('routes.base_crud_route', 'admin/');
		
		// Require an admin login if we are in production.
		if(IN_PRODUCTION)
		{
			customer::require_admin_login();	
		}
		
		ORM::factory('audit_trail')->create(array(
			'user_id' => customer::current(),
			'store_id' => store::get(),
			'controller' => Router::$controller,
			'method' => Router::$method,
			'object_id' => $this->input->post('id')
		));
	}
	
}