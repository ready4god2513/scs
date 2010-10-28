<?php

class Products_variant_Model extends ORM
{
	
	protected $belongs_to = array('product', 'variant');
}