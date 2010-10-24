<?php defined('SYSPATH') or die('No direct script access.');

class date 
{
	
	
	/**
	 * Return the date to the user in the following format- Full name of month, two digit day, Year (IE- January 29, 2010)
	 * @Developer Brandon Hansen
	 * @Date January 29, 2010
	 * @Param (string) $date
	 * @Return (string)
	 */
	public static function user_friendly_date($date)
	{
		if(!$date || $date == '0000-00-00')
		{
			return '---------';
		}
		
		return date('F d, Y', strtotime($date));
	}
	
	
	/**
	 * Database friendly dates
	 * @Developer Brandon Hansen
	 * @Date February 26, 2010
	 * @Param (string) $date
	 * @Param (bool) $include_hours (default true)
	 * @Return string
	 */
	public static function database_friendly($date, $include_hours = true)
	{
		if($include_hours)
		{
			return date('Y-m-d H:i:s', strtotime($date));
		}
		else
		{
			return date('Y-m-d', strtotime($date));
		}
	}
	
	
	/**
	 * Give a full day/time string to the user
	 * @Developer Brandon Hansen
	 * @Date April 19, 2010
	 * @Param (string) $date
	 * @Return (string)
	 */
	public static function full_date_time($date = NULL) 
	{
		return date('F j, Y h:i A',strtotime($date));
	}
	
	
	/**
	  * Time between two timestamps
	  * @Developer brandon
	  * @Date Apr 22, 2010
	  */
	public static function time_between($date1, $date2)
	{
		if(!$date1 || !$date2)
		{
			return 'Unknown';
		}
		else
		{
			return self::readable_seconds(strtotime($date1) - strtotime($date2));
		}
	}
	
	
	/**
	 * Display the time in H:i:s based on an integer
	 * @Developer Brandon Hansen
	 * @Date April 19, 2010
	 * @Param (int) $seconds
	 * @Return (string)
	 */
	public static function readable_seconds($seconds = NULL) 
	{
		
		if (!is_numeric($seconds)) return $seconds;
		$seconds = abs($seconds);

		$value = array(
			'years' => 0, 'days' => 0, 'hours' => 0,
			'minutes' => 0, 'seconds' => 0,
			);
			
		if($seconds >= 3600)
		{
			$value['hours'] = floor($seconds/3600);
			$seconds = ($seconds%3600);
		}
		if($seconds >= 60)
		{
			$value['minutes'] = floor($seconds/60);
			$seconds = ($seconds%60);
		}
		$value['seconds'] = floor($seconds);

		return self::force_double_digits($value['hours']) . ':'  .self::force_double_digits($value['minutes']) . ':' . self::force_double_digits($value['seconds']);

	}
	
	
	public function dateDiff($startDate, $endDate) 
	{ 
    // Parse dates for conversion 
    $startArry = date_parse($startDate); 
    $endArry = date_parse($endDate); 

    // Convert dates to Julian Days 
    $start_date = gregoriantojd($startArry["month"], $startArry["day"], $startArry["year"]); 
    $end_date = gregoriantojd($endArry["month"], $endArry["day"], $endArry["year"]); 

    // Return difference 
    return round(($end_date - $start_date), 0); 
} 
	
	
	/**
	 * Format a date for RSS feeds
	 * @Developer Brandon Hansen
	 * @Date April 19, 2010
	 * @Param (string) $date
	 * @Return (string)
	 */
	public static function rss($date)
	{
		return date('D, d M Y, H:i:s e', strtotime($date));
	}

}