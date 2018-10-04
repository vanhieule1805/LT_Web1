<?php
$number = [1,2,3,4,5,6,7,8,9];
 for($i = 0 ; $i < 9; $i++)
 {
 	for ($j = $i +1; $j < 9; $j++)
 	{
 		if($number[$j] > $number[$i])
 		{
 			$number[$i] = $number[$i] + $number[$j];
 			$number[$j] = $number[$i] - $number[$j];
 			$number[$i] = $number[$i] - $number[$j];

 		}
 	}
 }
?>


<html>
	<head>
		
	</head>
	<body>

	</body>

	Cau a)
	<?php
		for ($i=0; $i <9; $i++)
		 { 
			echo $number[$i] ;
		}
	?>
	<br>
	Cau b) 36 lần
		<br>
	CauC) bulble sort <br>
<?php
			for($i = 0 ; $i < 9; $i++)
		 {
		 	for ($j =8 ; $j > $i; $j--)
		 	{
		 		if($number[$j] > $number[$j-1])
		 		{
		 			$number[$j] = $number[$j] + $number[$j-1];
		 			$number[$j-1] = $number[$i] - $number[$j-1];
		 			$number[$i] = $number[$i] - $number[$j-1];

		 		}
		 	}
		 }

		 for ($i=0; $i <9; $i++)
		 { 
			echo $number[$i] ;
		}
 ?>
	</body>
</html>