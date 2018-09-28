<?php
#Function block code
	function Sumfunction(){
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
		echo "<br>";
		echo $sum + $sum;
	}
	Sumfunction();
?>