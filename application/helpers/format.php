<?php defined('SYSPATH') or die('No direct script access.');

class format 
{
	
	/**
	 * Take a string and return it as dollar format
	 * @Developer Brandon Hansen
	 * @Date April 19, 2010
	 * @Param (float) $amount
	 * @Return (string)
	 */
	public static function dollar_format($amount = 0.00) 
	{
		if(is_numeric($amount)){
			return'$' . number_format($amount, 2);
		}
		return '$0.00';
	}
	
	
	/**
	  * Return the city/state/zip in one line
	  * @Developer brandon
	  * @Date Apr 22, 2010
	  */
	public function city_state_zip(Customers_Address_Model $address)
	{
		if(!$address->city)
		{
			return '';
		}
		else
		{
			return $address->city . ', ' . $address->state . ' ' . $address->zip;
		}
	}
	
	
	/**
	  * Escape Javascript
	  * @Developer brandon
	  * @Date May 7, 2010
	  */
	public static function escape_javascript($string = NULL)
	{
		return str_replace(array(chr(13), chr(10)), '', $string);
	}
	
	
	/**
	 * Take a float and make it a dollar format.  If it is zero, then return blank
	 * @Developer Brandon Hansen
	 * @Date April 19, 2010
	 * @Param (float) $amount
	 * @Param (string) $replace_with
	 * @Return (string)
	 */
	public static function dollar_format_blank_when_zero($amount = 0.00, $replace_with = NULL) 
	{
		if($amount != 0.00){
			return self::dollar_format($amount);
		}
		else
		{
			return $replace_with;
		}
	}
	
	
	/**
	  * Remove underscore and replace with spaces
	  * @Developer brandon
	  * @Date Apr 21, 2010
	  */
	public static function friendly_model_name($name)
	{
		return ucwords(str_replace('_', ' ', $name));
	}
	
	
	/**
	  * Convert a boolean to string
	  * @Developer brandon
	  * @Date Apr 20, 2010
	  * @Param (bool) $bool
	  * @Param (string) $true
	  * @Param (string) $false
	  * @Return (string)
	  */
	public static function to_s($bool, $true = 'True', $false = 'False')
	{
		return $bool ? $true : $false;
	}
	
	/**
	 * Round all dollar float to the nearest penny
	 * @Developer Brandon Hansen
	 * @Date April 19, 2010
	 * @Param (float) $amount
	 * @Return (float)
	 */
	public static function dollar_round($amount)
	{
		return number_format($amount, 2, '.', '');
	}
	
	
	/**
	 * Replace spaces with dashes
	 * @Developer Brandon Hansen & Andrew Lyric
	 * @Date March 04, 2010
	 * @Param (string) $string
	 * @Return (string) $string
	 */
	public static function pretty_url($string)
	{
		$string = trim($string);
		$result = preg_replace('/[^a-zA-Z0-9\s]/','',$string);
		return str_replace(' ', '-', $result);
	}
	
	
	/**
	  * Replace dash with a space
	  * @Developer brandon
	  * @Date Oct 4, 2010
	  */
	public static function dash_to_space($string)
	{
		return str_replace('-', ' ', $string);
	}

}