<?PHP
	if($_GET)
	{
		foreach($_GET as $key => $value)
		{
			echo "$key: $value".PHP_EOL;
			echo "\n";
		}

	}
?>
