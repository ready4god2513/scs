<?php

abstract class Admin_Controller extends Application_Controller
{
	
	public $template = 'layouts/admin';
	protected $base_route = '/admin/';
	protected $excluded_actions = array();
	
}