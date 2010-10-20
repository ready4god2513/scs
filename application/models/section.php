<?php

class Section_Model extends ORM
{
	
	protected $belongs_to = array('store');
	protected $has_many = array('links');

}