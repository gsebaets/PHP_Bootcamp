<?PHP
	 function ft_split($str)
	 {
		 $array = explode(" ", $str);
		 sort($array);
		 return($array);
	 }
?>
