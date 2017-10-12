#!/usr/bin/php
<?PHP
while(true)
{
	echo "Enter a number: ";
	if($value = fgets(STDIN)){
		$value = rtrim($value);
		if(is_numeric($value) == 1){
			if($value % 2 == 0){
				echo "The number " . $value . " is even";
				echo "\n";
			}
			elseif($value % 2 !== 0){
				echo "The number " . $value . " is odd";
				echo "\n";
			}
		}
		else{
				echo "'". $value . "' is not a number";
				echo "\n";
			}
	}
	else
	{
		return(false);
	}
}
?>
