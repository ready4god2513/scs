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
	
	
	
	/**
	  * Clean up the show page URL
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function show($name = NULL)
	{
		$name = format::dash_to_space($name);
		$id = ORM::factory('product')->where('name', $name)->find();
		
		// Set the title
		meta::set_title(ucwords($name));
		
		// Show the page
		parent::show($id);
	}
	

}