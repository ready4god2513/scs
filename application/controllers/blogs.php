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

}