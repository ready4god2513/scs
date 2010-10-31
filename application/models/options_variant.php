<?php

class Options_variant_Model extends ORM
{
	
	protected $belongs_to = array('option', 'variant');
	protected $sorting = array('option_id' => 'ASC');
	
}