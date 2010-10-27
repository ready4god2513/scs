<?php

class Variant_Model extends ORM
{
	
	protected $has_and_belongs_to_many = array('products');
	protected $belongs_to = array('store');

}