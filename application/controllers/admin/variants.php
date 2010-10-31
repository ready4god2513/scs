<?php

class Variants_Controller extends Admin_Controller
{
	
	
	/**
	  * On the new page, we need to make sure to pass in the product
	  * @developer Brandon Hansen
	  * @date Oct 30, 2010
	  */
	public function new_one($product_id)
	{
		parent::new_one();
		$this->template->content->set('product', ORM::factory('product', $product_id));
	}

}