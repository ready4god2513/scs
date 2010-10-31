<?php

class Variant_Model extends ORM
{
	
	protected $belongs_to = array('product');
	protected $has_many = array('options_variant');
	
	/**
	  * Check to see if the product is in stock
	  * @developer Brandon Hansen
	  * @date Oct 30, 2010
	  */
	public function in_stock()
	{
		if($this->track_stock)
		{
			return $this->stock;
		}
		else
		{
			return '&infin;';
		}
	}
}