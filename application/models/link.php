<?php

class Link_Model extends ORM
{
	
	protected $belongs_to = array('section');
	protected $sorting = array('order' => 'ASC');
	
	
	/**
	  * Display a link
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public function display()
	{
		return html::anchor($this->url, $this->title);
	}

}