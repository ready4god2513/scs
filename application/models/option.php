<?php

class Option_Model extends ORM
{
	
	protected $has_and_belongs_to_many = array('products', 'variants');
	protected $belongs_to = array('store');
	protected $sorting = array('id' => 'ASC');

}