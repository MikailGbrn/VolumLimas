<!DOCTYPE html>
<html>
<head>
	<title>Rumus Limas</title>
	<style type="text/css">
		.tengahin {
			text-align: center;
			font-size: 30px;
			color: #a7bb9f;
			font-family: arial;
			margin-top: 50px;
			margin-bottom: auto;
			font-weight: bold;
		}
		.box {
			width: 350px;
			height: 50px;
			font-size: 50px;
			font-weight: bold;
			font-family: arial;
			text-align: center;
		}
		.tombol {
			width: 400px;
			height: 200px;
			font-size: 30px;
			font-weight: bold;
			font-family: arial;
			text-align: center;
		
		}
	</style>
</head>
<body style="background-color: #5a5a5a">
<form action="Hasil.php" method="POST">
	<p class="tengahin">Masukkan Panjang/Sisi<br> <input type="text" class="box" name="Panjang"></p>
	<p class="tengahin">Masukkan Lebar/Sisi-2<br> <input type="text" class="box" name="Lebar"></p>
	<p class="tengahin">Masukkan Tinggi<br> <input type="text" class="box" name="Tinggi"></p><br>
	<p class="tengahin"><input type="submit" class="tombol" value="Hitung Volume Limas" ></p>
</form>
</body>
</html>