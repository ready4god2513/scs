<?php

class Order_detail_Model extends ORM
{
	
	protected $belongs_to = array('order', 'product');

}