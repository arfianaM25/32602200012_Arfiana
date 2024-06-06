<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/profile" method="POST" >
    <label for="fruit">Nama-Nama Buah :</label>
		<select name="nama_buah" id="fruit" size="2" multiple>
			<option value="1">Apel</option>
			<option value="2">Mangga</option>
			<option value="3">Jeruk</option>
			<option value="4">Pepaya</option>
		</select>
        <br>
		<label for="alamat">Nama Mahasiswa:</label>
		<input type="text" id="alamat" name="nama_mahasiswa"><br>
		
		<label for="sandi">Password :</label>
		<input type="password" id="sandi"><br>

		<label for="checkbox">Checkbox :</label>
		<input type="checkbox" id="vehicle1" name="vehicle1" value="makan">
		<label for="vehicle1">Saya sedang makan</label><br>
    </form>
</body>
</html>