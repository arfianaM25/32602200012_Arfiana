<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoh Array ke HTML Table</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Stock</th>
			<th>Sold</th>
		</tr>
		<?php
			$cars=array(
				array("Volvo", 22, 18),
				array("BMW", 15, 13),
				array("Saab", 5, 2),
				array("Land Rover", 17, 15)
			);
			foreach ($cars as $mobil){
		?>
		<tr>
			<td><?php echo $mobil[0];?></td>
			<td><?php echo $mobil[1];?></td>
			<td><?php echo $mobil[2];?></td>
		</tr>		
		<?php }?>
	</table>

</body>
</html>