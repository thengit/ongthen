<?php
#Function block code
	function confunction(){
		$killo=16;
		$money= 250;
		$pay = 0;
		$color = 'blue';
		if($killo<=15){
			$pay = $killo * $money;
			echo "Pay1 is: ";
			echo $pay;
		}
		else {
			$pay = ($killo * $money)/0.05;
			echo "Pay2 is: ";
			echo $pay;
			echo "<br>";
			echo $pay + $pay;
		}
		echo "<br>";
		switch ($color) {
			case 'red':
				echo "Your favorite color is Red";
				break;
			case 'green':
				echo "Your favorite color is Green";
				break;
			case 'blue':
				echo "Your favorite color is Blue";
				break;
			
			default:
				echo "Your favorite is something!";
		}
	}
	confunction();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<table border="1" width="800px" height="10px">
			<tr>
				<td>
					<?php
						confunction();
						echo "<br>";
						echo date('c D M Y');
						echo "<br>";
						echo date('h:m:sa');
					?>
				</td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
</body>
</html>