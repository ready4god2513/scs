<?php

class Missing_Page 
{
	
	function reroute()
	{
		url::redirect('errors/404/#' . url::current(true), 301);
	}
	
	/**
	  * Mark the shop as missing
	  * @Developer brandon
	  * @Date Oct 20, 2010
	  */
	function missing_shop()
	{
		require Kohana::find_file('views', 'errors/shop_not_found');
		die();
	}
}

Event::clear('system.404', array('Kohana', 'show_404')); 
Event::add('system.404',array('Missing_Page','reroute'));