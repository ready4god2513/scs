<?php

class Product_Model extends ORM
{
	
	protected $sorting = array('sort_order' => 'ASC');
	protected $has_many = array('cart_items', 'product_attributes', 'product_files', 'product_images', 'order_details');
	protected $has_and_belongs_to = array('categories');
	
	/**
	  * Show path route
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function show_path()
	{
		return url::site(Kohana::config('routes.base_crud_route') . inflector::singular($this->object_name) . '/' . format::pretty_url($this->name));
	}

}