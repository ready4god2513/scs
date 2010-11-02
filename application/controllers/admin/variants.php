<?php

class Variants_Controller extends Admin_Controller
{
	
	
	/**
	  * In order to create the form, we actually need to create the variant
	  * @developer Brandon Hansen
	  * @date Oct 30, 2010
	  */
	public function new_one($product = NULL)
	{
		$product = ORM::factory('product', $product);
		
		// Only continue if the product was found
		if(!$product->loaded)
		{
			return false;
		}
		
		$variant = ORM::factory('variant');
		$variant->create_blank($product);
		
		if(request::is_ajax())
		{
			View::factory('admin/variants/_nested_form')
				->set('variant', $variant)
				->render(true);
		}
		else
		{
			$this->template
			->set('content', View::factory('admin/variants/_nested_form')
				->set('variant', $variant)
				->render(true));
		}
		
	}

}