
<html>
	<head>
		
	</head>
	<body>
		<form >
			Nhap vao n:
			<input type="text" name="id">
			<input type="submit" value ="Kiểm tra">
		</form>

		<?php 
			 if(empty($_GET) == false)
			 {
			 	$sum = 0;
			 	$dem =0;
			 	for($i = 1; $i <= $_GET['id'] ; $i++)
			 	{
			 		if($_GET['id'] % $i == 0)
			 		{
			 			$dem++;
			 			$sum += $_GET['id'];
			 		}

			 	}
			 	
			 }

			 if($dem == 2)
			 {?>
			 	la so nguyen to
			 <?php 
			 }else
			 {
			 	echo "khong la so nguyen to";
			 }

			 if($sum == $_GET['id'])
			 {?>
			 	la so hoan hao
			<?php
			 }else
			 {
			 	echo "khong la so hoan";
			 }



	?>
	</body>
</html>