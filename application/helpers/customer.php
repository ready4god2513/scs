<?php

class customer_Core 
{
	
	
	/**
	 * Get the current customer
	 * @Developer Brandon Hansen
	 * @Date April 05, 2010
	 * @Return Customer_Model
	 */
	public static function current()
	{
		if(self::logged_in())
		{
			return Auth::instance()->get_customer();
		}
		else
		{
			return ORM::factory('customer');
		}
	}
	
	
	/**
	 * Check to see if the customer is logged in
	 * @Developer Brandon Hansen
	 * @Date April 05, 2010
	 * @Return bool
	 */
	public static function logged_in()
	{
		return Auth::instance()->logged_in();
	}
	
	
	/**
	 * Require the customer to log in if they are not yet logged in
	 * @Developer Brandon Hansen
	 * @Date April 06, 2010
	 * @Return void
	 */
	public static function require_login()
	{
		if(!self::logged_in())
		{
			Session::instance()->set('redirect', url::current(true));
			url::redirect('login');
		}
	}
	
	
	/**
	 * Check to see if a customer is an admin
	 * @Developer Brandon Hansen
	 * @Date April 06, 2010
	 * @Return bool
	 */
	public static function is_admin()
	{
		return (bool) self::current()->has(ORM::factory('role', 'admin'));
	}
	
	
	/**
	 * If the customer is not and admin, require them to login
	 * @Developer Brandon Hansen
	 * @Date April 06, 2010
	 * @Return void
	 */
	public static function require_admin_login()
	{
		if(!self::is_admin())
		{
			Session::instance()->set('redirect', url::current(true));
			url::redirect('login');
		}
	}
	
}