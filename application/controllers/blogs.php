<?php

class Blogs_Controller extends Application_Controller
{
	
	
	/**
	  * Set the title on the index page
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function index()
	{
		meta::set_title('Awesome &amp; Upcoming');
		parent::index();
	}
	
	
	/**
	  * Clean up the show page URL
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function show($name = NULL)
	{
		$blog = ORM::factory('blog')->where('name', format::dash_to_space($name))->find();
		
		// Set the title
		meta::set_title(ucwords($blog->name));
		
		// Set the description
		meta::set_description($blog->synopsis);
		
		// Show the page
		parent::show($blog);
	}

}