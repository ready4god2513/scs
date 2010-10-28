<?php

class Products_Controller extends Admin_Controller
{
	
	
	/**
	  * Create a product
	  * @developer Brandon Hansen
	  * @date Oct 27, 2010
	  */
	public function new_one()
	{
		$this->template
			->set('content', View::factory('admin/products/new')
				->set('product', ORM::factory('product')));
	}
	
	
	/**
	  * Edit a product
	  * @developer Brandon Hansen
	  * @date Oct 27, 2010
	  */
	public function edit($id = NULL)
	{
		$this->template
			->set('content', View::factory('admin/products/edit')
				->set('product', ORM::factory('product', $id)));
	}
	
}