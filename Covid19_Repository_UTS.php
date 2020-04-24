<!DOCTYPE html>
<html>
<head>
	<title>Covid-19</title>
	<style type="text/css">
		.conten{
			border:1px;
			padding: 50px;
		}
		table{
			margin-bottom: 50px;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
	<div class="conten">
	<table>
		<tr>
			<td>1. Nama Wilayah : </td>
			<td>
				<select name="wilayah" id="wilayah" onchange="klik();">
					<option value="dki">DKI Jakarta</option>
					<option value="jawa">Jawa Barat</option>
					<option value="ban">Banten</option>
					<option value="jwt">Jawa Tengah</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>2. Jumlah Positif</td>
			<td><input type="text" name="positif" id="positif"></td>
		</tr>
		<tr>
			<td>3. Jumlah dirawat</td>
			<td><input type="text" name="dirawat" id="dirawat"></td>
		</tr>
		<tr>
			<td>4. Jumlah Sembuh</td>
			<td><input type="text" name="sembuh" id="sembuh"></td>
		</tr>
		<tr>
			<td>5. Jumlah Meninggal</td>
			<td><input type="text" name="meninggal" id="meninggal"></td>
		</tr>
		<tr>
			<td>6. Nama Operator</td>
			<td><input type="text" name="operator" id="operator"></td>
		</tr>
		<tr>
			<td>7. NIM Mahasiswa</td>
			<td><input type="text" name="nim" id="nim"></td>
		</tr>
	</table>
	<input type="submit" name="simpan" value="Simpan">
</div>
</form>
<?php 

if (isset($_POST['simpan'])) {
	$wilayah = $_POST['wilayah'];
	$positif = $_POST['positif'];
	$dirawat = $_POST['dirawat'];
	$sembuh = $_POST['sembuh'];
	$meninggal = $_POST['meninggal'];
	$operator = $_POST['operator'];
	$nim = $_POST['nim'];

	date_default_timezone_set('Asia/Jakarta'); 
	$date = date("h:i:s");

	echo "<table border='1'>";
	echo "<tr><th colspan='7'>";

	echo "<p>Data Pemantauan Covid19 wilayah Banten</p>";
	echo "<p>Per 24 April 2020 $date<p>";
	echo "<p>$operator / $nim</p>";

	echo "</th></tr>";
	echo "<tr>
			<th>Nama Wilayah</th>
			<th>Jumlah Positif</th>
			<th>Jumlah Dirawat</th>
			<th>Jumlah Sembuh</th>
			<th>Jumlah Meninggal</th>
			<th>Nama Operator</th>
			<th>Nim Mahasiswa</th>
		</tr>
		<tr>
			<td>".$wilayah."</td>
			<td>".$positif."</td>
			<td>".$dirawat."</td>
			<td>".$sembuh."</td>
			<td>".$meninggal."</td>
			<td>".$operator."</td>
			<td>".$nim."</td>
		</tr>
	</table>";
	}
?>

<script type="text/javascript">
	function klik(){
		var dki = document.getElementById('wilayah').value = 'dki';

		dki = ['2902','1769','206','257','YULINUR','2016142155'];

		document.getElementById('positif').value = dki[0];
		document.getElementById('dirawat').value = dki[1];
		document.getElementById('sembuh').value = dki[2];
		document.getElementById('meninggal').value = dki[3];
		document.getElementById('operator').value = dki[4];
		document.getElementById('nim').value = dki[5];
	}
</script>
</body>
</html>