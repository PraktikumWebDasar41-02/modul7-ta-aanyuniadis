<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
<style type="">
		table{
			font-family: verdana, helvetica, arial, sans-serif;
			font-style: 12px;
		}
		input{
			font-family: verdana, helvetica, arial, sans-serif;
			font-style: 12px;
			height:20px;
		}
	</style>
</head>
<body bgcolor="#f7a5d5">
	<br><br>
	<center>
		<h3>Form Mahasiswa</h3>
			<form action="" method="POST">
				<table>
				<tr>
					<td> NIM </td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td> Nama </td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td> Tanggal Lahir </td>
					<td>:</td>
					<td><input type="date" name="tanggal_lahir"></td>
				</tr>
				<tr>
					<td> Jenis Kelamin </td>
					<td>:</td>
					<td>
						<select name ="jenis_kelamin">
							<option value="Laki-Laki">Laki - Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Program Studi </td>
					<td>:</td>
					<td>
						<select name ="prodi">
							<option value="Sistem Informasi">Sistem Informasi</option>
		    				<option value="Teknologi Komputer">Teknologi Komputer</option>
		    				<option value="Teknik Informatika">Teknik Informatika</option>
		    				<option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
		    				<option value="Manajemen Informatika">Manajemen Informatika</option>
		    				<option value="Perhotelan">Perhotelan</option>
		    				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>	
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">Fakultas</td>
					<td valign="top">:</td>
					<td>
						<input type="Radio" name="fakultas" value="FIT" checked="yes">Fakultas Ilmu Terapan<br>
						<input type="Radio" name="fakultas" value="FKB">Fakultas Komunikasi Bisnis<br>
						<input type="Radio" name="fakultas" value="FEB">Fakultas Ekonomi Bisnis<br>
						<input type="Radio" name="fakultas" value="FRI">Fakultas Rekayasa Industri<br>
						<input type="Radio" name="fakultas" value="FIK">Fakultas Industri Kreatif<br>
						<input type="Radio" name="fakultas" value="FIF">Fakultas Informatika<br>
						<input type="Radio" name="fakultas" value="FTE">Fakultas Teknik Elektro
					</td>
				</tr>
				<tr>
					<td> Asal </td>
					<td>:</td>
					<td><input type="text" name="asal"></td>
				</tr>
				<tr>
					<td> Motto Hidup </td>
					<td>:</td>
					<td><textarea name ="moto_hidup" placeholder="Isilah Motto Hidup Anda"></textarea></td>
				</tr>
				<tr>
					<td colspan="3"><center><input type="submit" name="submit"></center></td>
				</tr>
			</form>
		</table>
	</center>
</body>
</html>

<?php 
	$konek = mysqli_connect('localhost','root','','TA7');
	if (!$konek) {
		die("Connection Failed :".mysqli_connect_error());
	}
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto_hidup = $_POST['moto_hidup'];

	$query = "INSERT INTO TA_7(nim, nama, tanggal_lahir, jenis_kelamin, prodi, fakultas, asal, moto_hidup) VALUES('$nim','$nama','$tanggal_lahir','$jenis_kelamin','$prodi','$fakultas','$asal','$moto_hidup')";

		if ($nim == is_numeric($nim) && strlen($nim) == 10) {
			if (mysqli_query($konek,$query)) {
				echo "Data Anda Berhasil Disimpan";
				header("Location:home.php");
			}else{
				echo "Data Anda Gagal Disimpan";
			}
		}
	}
?>