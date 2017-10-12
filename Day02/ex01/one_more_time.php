#!/usr/bin/php
<?php
function transformMonth($x)
{
	$array = array("Janvier" => 1,
		"Fevrier" => 2,
		"Mars" => 3,
		"Avril" => 4,
		"Mai" => 5,
		"Juin" => 6,
		"Juillet" => 7,
		"Aout" => 8,
		"Septembre" => 9,
		"Octobre" => 10,
		"Novembre" => 11,
		"Decembre" => 12);
	return $array[$x];
}
if ($argc > 1)
{
	if (preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-9]{2}) ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $matches))
	{
		date_default_timezone_set("Europe/Paris");
		print(mktime($matches[5], $matches[6], $matches[7],
			transformMonth(ucfirst($matches[3])), $matches[2], $matches[4]));
	}
	else
		print("Wrong Format");
	print(PHP_EOL);
}
?>
