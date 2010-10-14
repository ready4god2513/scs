<?php

abstract class Application_Controller extends Crud_Controller
{
	
	protected $excluded_actions = array('edit', 'update', 'new_one', 'create', 'delete');
	
	/**
	  * Set the view to use
	  * @developer Brandon Hansen
	  * @date Oct 13, 2010
	  */
	public function __construct()
	{
		parent::__construct();
		$this->template = View::factory('themes/' . theme::get() . '/application');
	}
	
}