<?php
#Loop Excute code set number of times
	/*
	For
	while
	Do while 
	Foreach
	*/
	$sum =0;
	for ($i=1; $i <=10 ; $i++) { 
		# code...
		echo $i;
		if ($i<10) {
			# code...

			echo " + ";
		}
		$sum =$sum + $i;
	}
	echo " = ".$sum;
  ?>