<?php

class Products_Controller extends Application_Controller
{
	
	
	/**
	  * Set the title on the index page
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function index()
	{
		meta::set_title('Hand Crafted Roasts');
		parent::index();
	}
	

}