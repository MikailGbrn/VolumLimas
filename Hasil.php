<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
	<style type="text/css">
		.tengahin {
			text-align: center;
			font-size: 250px;
			color: #4a6d86;
			font-family: arial;
			margin-top: 50px;
			margin-bottom: auto;
		}
		.tengahin2 {
			text-align: center;
			font-size: 50px;
			color: #5a5a5a;
			font-family: arial;
			margin-top: 50px;
			margin-bottom: auto;
			font-weight: bold;
		}
		.tombol {
			width: 400px;
			height: 200px;
			font-size: 30px;
			font-weight: bold;
			font-family: arial;
			text-align: center;
			margin-left: 500px;
		}
	</style>
</head>
<body style="background-color: #a9d795">
	<p class="tengahin2">JAWABANNYA ADALAH</p>
	<p class="tengahin">
<?php
$Panjang = $_REQUEST['Panjang'];
$Lebar = $_REQUEST['Lebar'];
$Tinggi = $_REQUEST['Tinggi'];
$tmp = $Panjang * $Lebar * $Tinggi;
echo $tmp/3;
?>
</p>

<p style="text-align: center; font-size: 15px; font-family: arial; font-weight: bold"><?php
	$Panjang = $_REQUEST['Panjang'];
	$Lebar = $_REQUEST['Lebar'];
	$Tinggi = $_REQUEST['Tinggi'];
	echo 'Limas Segi Empat Dengan<br>';
	echo 'Panjang = ' . $Panjang . '<br>' ;
	echo 'Lebar = ' . $Lebar . '<br>';
	echo 'Tinggi = ' . $Tinggi . '<br>';
	?></p>

<form action="VolumLimas.php">
	<input type="submit" class="tombol" value="HITUNG LAGI">
</form>
</body>
</html>