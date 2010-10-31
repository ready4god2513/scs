<?php

class Product_Model extends ORM
{
	
	protected $sorting = array('sort_order' => 'ASC');
	protected $has_many = array('cart_items', 'files', 'images', 'tags', 'order_details', 'variants');
	protected $has_and_belongs_to_many = array('categories', 'options');
	protected $belongs_to = array('store', 'vendor');
	protected $validates_presence_of = array('name', 'slug');
	
	
	/**
	  * Whenever setting the slug, make sure that it conforms to requirements
	  * @developer Brandon Hansen
	  * @date Oct 26, 2010
	  */
	public function __set($key, $value)
	{
		if($key == 'slug')
		{
			$value = format::pretty_url($value);
		}
		
		parent::__set($key, $value);
	}
	
	
	/**
	  * Show path route
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function show_path($abs = true)
	{
		$path = $this->object_name . '/' . format::pretty_url($this->slug);
		
		if($abs)
		{
			return url::site($path);
		}	
		else
		{
			return $path;
		}
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
	
	
	/**
	  * Provide a link to the product
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function link()
	{
		return html::anchor($this->show_path(), $this->name);
	}
	
	
	/**
	  * Get the base price
	  * @developer Brandon Hansen
	  * @date Oct 26, 2010
	  */
	public function base_price()
	{
		return rand(1, 9187.80);
	}

}