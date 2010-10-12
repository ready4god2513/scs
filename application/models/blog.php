<?php

class Blog_Model extends ORM
{
	
	protected $sorting = array('created_at' => 'DESC');
	
	
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
	  * Get the most recent blog synopsis
	  * @Developer brandon
	  * @Date Oct 12, 2010
	  */
	public function get_latest_entry_synopsis()
	{
		return $this->find()->synopsis;
	}

}