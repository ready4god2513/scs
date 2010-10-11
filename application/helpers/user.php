<?php

class user_Core 
{
	
	public static $user;
	
	
	/**
	 * Get the current user
	 * @Developer Brandon Hansen
	 * @Date April 05, 2010
	 * @Return User_Model
	 */
	public static function current()
	{
		if(!self::$user)
		{
			self::$user = ORM::factory('user', Session::instance()->get('id'));
		}
		
		return self::$user;
	}
	
	
	/**
	 * Check to see if the user is logged in
	 * @Developer Brandon Hansen
	 * @Date April 05, 2010
	 * @Return bool
	 */
	public static function logged_in()
	{
		return self::current()->loaded;
	}
	
	
	/**
	 * Start the user session
	 * @Developer Brandon Hansen
	 * @Date April 07, 2010
	 * @Param User_Model $user
	 */
	public static function set_current(User_Model $user)
	{
		Session::instance()->set('id', $user->id);
		self::$user = $user;
	}
	
	
	/**
	 * Require the user to log in if they are not yet logged in
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
	 * Check to see if a user is an admin
	 * @Developer Brandon Hansen
	 * @Date April 06, 2010
	 * @Return bool
	 */
	public static function is_admin()
	{
		return (bool) self::current()->has(ORM::factory('role', 'admin'));
	}
	
	
	/**
	 * If the user is not and admin, require them to login
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