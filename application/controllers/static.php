<?php

class Static_Controller extends Application_Controller
{
	
	
	/**
	  * Set the view to use
	  * @developer Brandon Hansen
	  * @date Oct 13, 2010
	  */
	public function __construct()
	{
		parent::__construct();
		$this->template = View::factory('themes/' . theme::get() . '/home');
	}
	
	
	/**
	  * Set the home page
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function home()
	{
		meta::set_title('Stu\'s Coffee Shoppe');
	}

}