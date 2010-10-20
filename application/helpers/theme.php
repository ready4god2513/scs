<?php

class theme_Core
{
	
	/**
	  * Get the body id
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function body_id()
	{
		return Router::$controller;
	}
	
	
	/**
	  * Get the body class
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function body_class()
	{
		return Router::$method;
	}
	
	
	/**
	  * Get a setting from the database
	  * @developer Brandon Hansen
	  * @date Oct 13, 2010
	  */
	public static function get()
	{
		return store::get()->theme->name;
	}
	
	
	/**
	  * Static file path
	  * @developer Brandon Hansen
	  * @date Oct 13, 2010
	  */
	public static function static_file_path()
	{
		return url::site('/public/themes/' . self::get());
	}
	
	
	/**
	  * Show an image
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function image($src = NULL, $alt = NULL, $index = FALSE)
	{
		return html::image(self::static_file_path() . '/' . $src, $alt, $index);
	}
	
	/**
	  * Add a theme stylesheet
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function stylesheet($style, $media = FALSE, $index = FALSE)
	{
		return html::stylesheet(self::static_file_path() . '/' . $style, $media, $index);
	}
	
	
	/**
	  * Add a theme JS file
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function script($script, $index = FALSE)
	{
		return html::script(self::static_file_path() . '/' . $script, $index);
	}
	
	
	/**
	  * Run any events that take an action on the footer
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function render_footer()
	{
		return Event::run('layout.footer.output');
	}
	
	
	/**
	  * Run any events that take an action on the <head /> section
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function render_script()
	{
		return Event::run('layout.script.output');
	}
	
	
	/**
	  * Run an events that take an action on the header
	  * @developer Brandon Hansen
	  * @date Oct 19, 2010
	  */
	public static function render_header()
	{
		return Event::run('layout.header.output');
	}
	
}