<?php

class Product_image_Model extends ORM
{
	
	protected $belongs_to = array('product');
	protected $sorting = array('sort_order' => 'ASC');
	
}