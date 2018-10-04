<?php
	$number = [1,2,3,4,5,6,7,8,9];
	$ckeck = false;
	for ($i = 0; $i < 9; $i++)
		{
			if($number[$i] == 5)
			{
				$ckeck = true;
				break;
			}
		}
	$left = 0;
	$right = 9;
	$mid ;
	$kiemtra =-1;
	while($left <= $right)
	{
		$mid =($left + $right)/ 2;
		if($number[$mid] == 5)
		{
			$kiemtra = $mid;
			break;
		}else if($number[$mid] < 5)
		{
			$left = $mid + 1;
		} else
		{
			$right = $mid - 1;
		}
	}

?>
<html>
	<head>
		
	</head>
	<body>
		Câu a)
		<?php
		if($ckeck == true)
		{
			echo "co 5 trong mang";
		}else
		{
			echo "khong co 5 trong mang";
		}
		?>
		<br>
		Câu b) 5 lần
		<br>
		Câu c)
		<br>
		<?php
		if($kiemtra != -1)
		{
			echo "co 5 trong mang";
		}else
		{
			echo "khong co 5 trong mang";
		}
		?>

	</body>
</html>