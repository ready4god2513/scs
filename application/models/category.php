<?php

class Category_Model extends ORM
{
	
	protected $sorting = array('sort_order' => 'ASC');
	protected $has_and_belongs_to_many = array('products');
	protected $belongs_to = array('store');
	protected $validates_presence_of = array('name', 'slug');
	
	
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

}