<?php

class RomanConverter
{
	protected static $lookup = [
		'CM'	=>	900,
		'M'		=>	1000,
		'CD'	=>	400,
		'D'		=>	500,
		'XC'	=>	90,
		'C'		=>	100,
		'XL'	=>	40,
		'L'		=>	50,
		'IX'	=>	9,
		'X'		=>	10,
		'IV'	=>	4,
		'V'		=>	5,
		'I'		=>	1
	];
    public function convert($romanNumber)
    {
    	$number = 0;
    	foreach(static::$lookup as $glyph => $limit)
    	{
	    	$number+= substr_count($romanNumber, $glyph)*$limit;
	    	$romanNumber = str_replace($glyph, "", $romanNumber); 
    		
    	}
    	return $number;
    }
}
