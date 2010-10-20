<?php

class Blog_Model extends ORM
{
	
	protected $belongs_to = array('store');
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
	
	
	/**
	  * Get the description as markdown
	  * @Developer brandon
	  * @Date Oct 13, 2010
	  */
	public function content_formatted()
	{
		$markdown = new Markdown();
		return $markdown->transform($this->content);
	}
	
	
	/**
	  * Get the description as markdown
	  * @Developer brandon
	  * @Date Oct 13, 2010
	  */
	public function synopsis_formatted()
	{
		$markdown = new Markdown();
		return $markdown->transform($this->synopsis);
	}
	
	
	/**
	  * Provide a link to the blog entry
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function link()
	{
		return html::anchor($this->show_path(), $this->name);
	}

}