<?php

class Category_Model extends ORM
{
	
	protected $sorting = array('sort_order' => 'ASC');
	protected $has_and_belongs_to_many = array('products');
	protected $belongs_to = array('store', 'category');
	protected $has_many = array('categories');
	
	// Add a blank option for categories
	public $formo_defaults = array(
		'category_id' => array(
			'blank' => true,
			'label' => 'Category'
		)
	);
	
	
	/**
	  * Show path route
	  * @Developer brandon
	  * @Date Oct 11, 2010
	  */
	public function show_path($abs = true)
	{
		$path = format::pretty_url($this->slug);
		
		if($abs)
		{
			return url::site($path);
		}	
		else
		{
			return $path;
		}
	}

}