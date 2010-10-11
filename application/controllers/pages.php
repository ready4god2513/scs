<?php

class Pages_Controller extends Application_Controller
{
	
	
	/**
	  * Clean up the show page URL
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function show($name = NULL)
	{
		$name = format::dash_to_space($name);
		$id = ORM::factory('page')->where('name', $name)->find();
		
		// Set the title
		meta::set_title(ucwords($name));
		
		// Show the page
		parent::show($id);
	}

}