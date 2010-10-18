<?php

class Page_category_Model extends ORM
{
	
	protected $has_many = array('pages');
	protected $belongs_to = array('store');

}