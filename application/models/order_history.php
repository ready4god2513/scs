<?php

class Order_history_Model extends ORM
{
	
	
	protected $belongs_to = array('order');
	protected $sorting = array('id' => 'DESC');

}