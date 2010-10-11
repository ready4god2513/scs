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
		$page = ORM::factory('page')->where('name', format::dash_to_space($name))->find();
		
		// Set the title
		meta::set_title(ucwords($page->name));
		
		// Set the description
		meta::set_description($page->synopsis);
		
		// Show the page
		parent::show($page);
	}

}