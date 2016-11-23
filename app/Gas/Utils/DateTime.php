<?php

use Carbon\Carbon;

// ---------------------------------------------------------------------------------
// If Today is {Day}
// ---------------------------------------------------------------------------------
if (!function_exists('if_today')){
	function if_today($day, $true = TRUE, $false = FALSE)
	{
		$dt = new Carbon();

		if($day == 'Monday' && $dt->dayOfWeek == Carbon::MONDAY)
		{
			return $true;
		}
		else if($day == 'Tuesday' && $dt->dayOfWeek == Carbon::TUESDAY)
		{
			return $true;
		}
		else if($day == 'Wednesday' && $dt->dayOfWeek == Carbon::WEDNESDAY)
		{
			return $true;
		}
		else if($day == 'Thursday' && $dt->dayOfWeek == Carbon::THURSDAY)
		{
			return $true;
		}
		else if($day == 'Friday' && $dt->dayOfWeek == Carbon::FRIDAY)
		{
			return $true;
		}
		else if($day == 'Saturday' && $dt->dayOfWeek == Carbon::SATURDAY)
		{
			return $true;
		}
		else if($day == 'Sunday' && $dt->dayOfWeek == Carbon::SUNDAY)
		{
			return $true;
		}
		else
		{
			return $false;
		}
	}
}

// ---------------------------------------------------------------------------------
// Day of Week
// ---------------------------------------------------------------------------------
if (!function_exists('day_of_week')){
	function day_of_week()
	{
		$dt = new Carbon();

		if($dt->dayOfWeek == Carbon::MONDAY)
		{
			return 'Monday';
		}
		else if($dt->dayOfWeek == Carbon::TUESDAY)
		{
			return 'Tuesday';
		}
		else if($dt->dayOfWeek == Carbon::WEDNESDAY)
		{
			return 'Wednesday';
		}
		else if($dt->dayOfWeek == Carbon::THURSDAY)
		{
			return 'Thursday';
		}
		else if($dt->dayOfWeek == Carbon::FRIDAY)
		{
			return 'Friday';
		}
		else if($dt->dayOfWeek == Carbon::SATURDAY)
		{
			return 'Saturday';
		}
		else if($dt->dayOfWeek == Carbon::SUNDAY)
		{
			return 'Sunday';
		}
		else
		{
			return NULL;
		}
	}
}
