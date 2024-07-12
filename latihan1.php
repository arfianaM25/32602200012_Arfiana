<!DOCTYPE html>
<html>
<body>

	<?php
	echo "HELLO WORLD";
	echo"<br>";
	$txt = "Silvi Nurcahyaningsih";
	echo $txt;
	$x=",what about you?";
	echo"<br>";
	echo " HELLO WORLD I this is my first php page".$x;
	echo"<br>";
	echo"<br>";

	$cars = array("Volvi", "BMW", "Toyota");
	$arrlength = count($cars);
	for($x = 0; $x < $arrlength; $x++){
		echo $cars[$x];
		echo"<br>";
	}
	echo"<br>";

	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

	foreach ($age as $x => $x_value) {
		echo "Key=" . $x . ", Value=" . $x_value; //menampilkan seluruh array
		echo"<br>";
		echo $age["Joe"]; //memanggil salah satu index tapi dengan index yang sudah ditentukan
		print_r($age);
	}
	?>

</body>
</html>