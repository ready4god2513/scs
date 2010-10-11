<?php

class Carts_Controller extends Application_Controller
{
	
	
	/**
	  * Set the title for the cart
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function __construct()
	{
		parent::__construct();
		
		meta::set_title('Shopping Cart');
	}

}