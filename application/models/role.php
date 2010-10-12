<?php

class Role_Model extends ORM
{
	
	protected $primary_key = array('name');
	protected $has_and_belongs_to = array('users');

}