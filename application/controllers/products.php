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
		// Find the product that we are trying to access
		$product = ORM::factory('product')->where('name', format::dash_to_space($name))->find();
		
		// Set the title
		meta::set_title(ucwords($product->name));
		
		// Set the description
		meta::set_description($product->description);
		
		// Show the page
		parent::show($product);
	}
	

}