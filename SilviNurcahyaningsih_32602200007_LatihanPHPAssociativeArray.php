<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan PHP Associative Array</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Kode</th>
			<th>Mata Kuliah</th>
			<th>Nama<br>Kelas</th>
			<th>Pengajar</th>
		</tr>
		<?php
			$matakuliah=array(
				array("IF216008024", "Dasar Pemrograman", "FDSPC", "Ghufron, ST., M.Kom"),
				array("IF216008025", "Praktikum Dasar Pemrograman", "FPDPC", "Ghufron, ST., M.Kom"),
				array("IF216008026", "Desain Basis Data", "FDBDA", "Moch Taufik, ST,MIT"),
				array("IF216008027", "Praktikum Desain Basis Data", "FPBDA", "Moch Taufik, ST,MIT"),
				array("IF216008037", "Web Programing", "FWBPA", "Badieah, ST., M.Kom"),
				array("IF216008038", "Praktikum Web Programing", "FPWPA", "Badieah, ST., M.Kom"),
				array("IF216012001", "Tugas Akhir", "FTUAA", "Andi Riansyah, ST., M.Kom"),
				array("IF216012002", "Seminar Tugas Akhir", "FSTAA", "Andi Riansyah, ST., M.Kom")
			);
			foreach ($matakuliah as $matkul) {
		?>
		<tr>
			<td class="align-center"><?php echo $matkul[0]; ?></td>
			<td class="align-left"><?php echo $matkul[1]; ?></td>
			<td class="align-center"><?php echo $matkul[2]; ?></td>
			<td class="align-left"><?php echo $matkul[3]; ?></td>
		</tr>
		<?php }?>

		<style>
			body{
				font-family: calibri, arial, sans-serif;
			}

			table{
				width: 535px;
				padding: 0px;
				margin: 0auto;
				border-collapse: collapse;
				border-spacing: 0px;
			}

			th{
				font-weight: bold;
				color: white;
				background-color: midnightblue;
				border: 1px solid black;
				width: 880px;
				padding-top: 0;
				padding-bottom: 0;
			}

			td{
				text-align: center;
				border: 1px solid black;
				width: 880px;
				padding-top: 0;
				padding-bottom: 0;
			}

			.align-left {
				text-align: left;
			}

			.align-center {
				text-align: center;
			}

			tr:nth-child(even){
				background-color: gainsboro;
			}
		</style>
	</table>
</body>
</html>