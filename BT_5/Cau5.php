
<?php

$users = array(
        0 => array(
                'id' => 10, 
                'name' => 'Messi',
                'email' => array(
                        'gmail' => '10@gmail.com',
                        'yahoo' => '10@yahoo.com',
                ),
        ),                
        1=> array(
                'id' => 7,
                'name' => 'Ronaldo',
                'email' => array(
                        'gmail' => '7@gmail.com',
                        'yahoo' => '7@yahoo.com',
                ),
        ),
        2=> array(
                'id' => 4, 
                'name' => 'Ramos',
                'email' => array(
                        'gmail' => '4@gmail.com',
                        'yahoo' => '4@yahoo.com',
                ),
        ),
        3=> array(
                'id' => 13, 
                'name' => 'Muller',
                'email' => array(
                        'gmail' => '13@gmail.com',
                        'yahoo' => '13@yahoo.com',
                ),
        ),
        4=> array(
                'id' => 11, 
                'name' => 'Neymar',
                'email' => array(
                        'gmail' => '11@gmail.com',
                        'yahoo' => '11@yahoo.com',
                ),
        ),

);

	$bool = false;
	for($i = 0; $i < 5; $i++)
	{
		if($users[$i]['id'] == 15)
		{
			$bool = true;
		}

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Bai5</title>
</head>
<body>
	<table>
		<tr>
			<td>STT</td>
			<td>ID</td>
			<td>Name</td>
			<td>Gmail</td>
		</tr>
		<?php for($i = 0; $i < 5; $i++): ?>
		<tr>
			<td><?php echo $i+1; ?></td>
			<td><?php echo $users[$i]['id']; ?></td>
			<td><?php echo $users[$i]['name']; ?></td>
			<td><?php echo $users[$i]['email']['gmail']; ?></td>
		</tr>
		<?php endfor; ?>

		

		
		
	</table>
	<?php if( $bool == true) : ?>
		<?php echo "tim thay"; ?>
	<?php endif ?>
	<?php if( $bool == false) : ?>
		<?php echo "Khong tim thay"; ?>
	<?php endif ?>

<table>
		<h4>Đã sắp xếp</h4>
	<?php

		for($i = 0; $i < 5; $i++)
	{
		for ($j = $i + 1; $j < 5; $j++)
		{
			if($users[$i]['id'] >$users[$j]['id'])
			{
				$tam = $users[$j];
				$users[$j] = $users[$i];
				$users[$i] = $tam;
			}		
		}
	}
	?>

	<tr>
			<td>STT</td>
			<td>ID</td>
			<td>Name</td>
			<td>Gmail</td>
		</tr>
		<?php for($i = 0; $i < 5; $i++): ?>
		<tr>
			<td><?php echo $i+1; ?></td>
			<td><?php echo $users[$i]['id']; ?></td>
			<td><?php echo $users[$i]['name']; ?></td>
			<td><?php echo $users[$i]['email']['gmail']; ?></td>
		</tr>
		<?php endfor; ?>
</table>
<form>
	ID <input type="text" name="id" />
	<input type="submit" value="Tìm Kiếm" />
</form>
	<?php 
 if(empty($_GET) == false)
 {
 	$ckeck = -1;
 	for($i = 0;  $i< 5; $i++)
 	{
 		if($users[$i]['id'] == $_GET['id'])
 		{
 			$ckeck = $i;
 			break;
 		}
 	}

 	if($ckeck != -1)
 	{?>
 		 <table>
		 	<tr>
		 		<td>ID</td>
				<td>Name</td>
				<td>Gmail</td>
		 	</tr>
		 	<tr>
		 		<td><?php echo $_GET['id']?></td>
				<td><?php echo $users[$ckeck]['name']?></td>
				<td><?php echo $users[$ckeck]['email']['gmail']?></td>
		 	</tr>
		 </table>
		<?php



 		
 	}else
 	{
 		echo "khong tim thay";
 	}


 }?>

		




	



		
</body>
</html>