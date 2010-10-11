<?php

class Page_Model extends ORM
{
	
	protected $belongs_to = array('page_category');
	protected $sorting = array('sort_order' => 'ASC');
	
	
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