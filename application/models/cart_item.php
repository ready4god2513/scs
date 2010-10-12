<?php

class Cart_item_Model extends ORM
{
	
	protected $belongs_to = array('cart', 'product');

}