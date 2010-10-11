<?php

abstract class Application_Controller extends Crud_Controller
{
	
	public $template = 'layouts/application';
	protected $excluded_actions = array('edit', 'update', 'new_one', 'create', 'delete');
	
}