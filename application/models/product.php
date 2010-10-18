<?php

class Product_Model extends ORM
{
	
	protected $sorting = array('sort_order' => 'ASC');
	protected $has_many = array('cart_items', 'product_attributes', 'product_files', 'product_images', 'order_details');
	protected $has_and_belongs_to = array('categories');
	protected $belongs_to = array('store');
	
	/**
	  * Show path route
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function show_path()
	{
		return url::site(Kohana::config('routes.base_crud_route') . inflector::singular($this->object_name) . '/' . format::pretty_url($this->name));
	}
	
	
	/**
	  * Make sure that the price gets formatted correctly
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function __get($key = NULL)
	{
		if($key == 'price')
		{
			return number_format(parent::__get($key), 2);
		}
		
		return parent::__get($key);
	}
	
	
	/**
	  * Get the description as markdown
	  * @Developer brandon
	  * @Date Oct 13, 2010
	  */
	public function description_formatted()
	{
		$markdown = new Markdown();
		return $markdown->transform($this->description);
	}

}