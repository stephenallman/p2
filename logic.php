

<?php require 'words.php'; ?>

<?php

	echo "<h2>";
	$i = 0;
	$j = 0;	
	$k = 0;
	
	while($j< $qSymbols || $i <$qWords || $k < $qNumbers)
	{
	if($i < $qWords){
			
			$rand_keys = array_rand($words,  8);
			echo ucfirst ($words[$rand_keys[$i]]);
			
			$i++;	
	}
		if($j < $qSymbols)
		{
			
			$rand_keys = array_rand($symbols, 7);
			echo $symbols[$rand_keys[$j]];
			
			$j++;
		}	
		
		if($k < $qNumbers)
		{	
			$rand_keys = array_rand($numbers, 9);
			echo $numbers[$rand_keys[$k]];
			
			$k++;
		}	
	}
			echo "</h2>";
			
?>			