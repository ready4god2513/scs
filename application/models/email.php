<?php

class Email_Model extends ORM
{
	
	protected $belongs_to = array('store');
	
	/**
	  * Make sure that formo uses textarea fields
	  * @Developer brandon
	  * @Date Oct 18, 2010
	  */
	public $formo_defaults = array(
		'order_confirmation' => array(
			'type' => 'textarea',
			'rows' => 20
		),
		'order_notification' => array(
			'type' => 'textarea',
			'rows' => 20
		),
		'shipping_confirmation' => array(
			'type' => 'textarea',
			'rows' => 20
		),
		'order_complete' => array(
			'type' => 'textarea',
			'rows' => 20
		),
		'order_refunded' => array(
			'type' => 'textarea',
			'rows' => 20
		)
	);

}