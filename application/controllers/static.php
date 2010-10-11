<?php

class Static_Controller extends Application_Controller
{
	
	
	/**
	  * Set the home page
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function home()
	{
		$this->template
			->set('content', View::factory('static/home'));
	}

}