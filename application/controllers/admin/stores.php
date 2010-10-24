<?php

class Stores_Controller extends Admin_Controller
{
	
	
	/**
	  * Show the overview of the store
	  * @developer Brandon Hansen
	  * @date Oct 23, 2010
	  */
	public function index()
	{
		$this->template
			->set('content', View::factory('admin/stores/index')
				->set('store', store::get())
			);
	}

}