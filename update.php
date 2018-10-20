<?php
	session_start();
	$konek = mysqli_connect('localhost','root','','TA7');
	$nim = $_SESSION["nim"];
	$save = "SELECT * FROM TA_7 WHERE nim = $nim";
 	$view = mysqli_query($konek,$save);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
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
		<h3>Edit Profil Page</h3>
			<form action="" method="POST" enctype="multipart/form-data">
				<table border="3">
					<?php while ($data = mysqli_fetch_array($view)) { ?>
				<tr>
					<td> Nim </td>
					<td>:</td>
					<td><?php echo $data['nim'];?></td>
				</tr>
				<tr>
					<td> Nama </td>
					<td>:</td>
					<td><input type="text" name = "nama" value="<?php echo $data['nama'];?>" size="30"></td>
				</tr>
				<tr>
					<td> Tanggal Lahir </td>
					<td>:</td>
					<td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>"></td>
				</tr>
				<tr>
					<td> Jenis Kelamin </td>
					<td>:</td>
					<td>
						<select name ="jenis_kelamin">
						<option value="Laki-Laki"
						<?php if ($data['jenis_kelamin'] == 'Laki-Laki') {
							echo "selected";
						}?>>Laki-Laki</option>
						<option value="Perempuan"		
						<?php if ($data['jenis_kelamin'] == 'Perempuan') {
							echo "selected";
						}?>>Perempuan</option>	
						</select>
					</td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td>
						<select name="prodi">
							<option value="Sistem Informasi"
							<?php if ($data['prodi'] == 'Sistem Informasi') {
								echo "selected";
							}?>>Sistem Informasi</option>
							<option value="Teknologi Komputer"
							<?php if ($data['prodi'] == 'Teknologi Komputer') {
								echo "selected";
							}?>>Teknologi Komputer</option>
							<option value="Teknik Informatika"
							<?php if ($data['prodi'] == 'Teknik Informatika') {
								echo "selected";
							}?>>Teknik Informatika</option>
							<option value="Manajemen Pemasaran"
							<?php if ($data['prodi'] == 'Manajemen Pemasaran') {
								echo "selected";
							}?>>Manajemen Pemasaran</option>
							<option value="Manajemen Informatika"
							<?php if ($data['prodi'] == 'Manajemen Informatika') {
								echo "selected";
							}?>>Manajemen Informatika</option>
							<option value="Perhotelan"
							<?php if ($data['prodi'] == 'Perhotelan') {
								echo "selected";
							}?>>Perhotelan</option>
							<option value="Teknik Telekomunikasi"
							<?php if ($data['prodi'] == 'Teknik Telekomunikasi') {
								echo "selected";
							}?>>Teknik Telekomunikasi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td>
						<input type="radio" name="fakultas" value="FIT"
						<?php if ($data['fakultas'] == 'FIT') {
							echo "checked";
						}?>>Fakultas Ilmu Terapan
						<input type="radio" name="fakultas" value="FKB"
						<?php if ($data['fakultas'] == 'FKB') {
							echo "checked";
						}?>>Fakultas Komunikasi Bisnis
						<input type="radio" name="fakultas" value="FEB"
						<?php if ($data['fakultas'] == 'FEB') {
							echo "checked";
						}?>>Fakultas Ekonomi Bisnis
						<input type="radio" name="fakultas" value="FRI"
						<?php if ($data['fakultas'] == 'FRI') {
							echo "checked";
						}?>>Fakultas Rekayasa Industri
						<input type="radio" name="fakultas" value="FIK"
						<?php if ($data['fakultas'] == 'FIK') {
							echo "checked";
						}?>>Fakultas Industri Kreatif
						<input type="radio" name="fakultas" value="FIF"
						<?php if ($data['fakultas'] == 'FIF') {
							echo "checked";
						}?>>Fakultas Informatika
						<input type="radio" name="fakultas" value="FTE"
						<?php if ($data['fakultas'] == 'FTE') {
							echo "checked";
						}?>>Fakultas Teknik Elektro
					</td>
				</tr>
				<tr>
					<td> Asal </td>
					<td>:</td>
					<td><input type="text" name = "asal" value="<?php echo $data['asal'];?>"></td>
				</tr>
				<tr>
					<td> Motto Hidup </td>
					<td>:</td>
					<td><textarea name="moto_hidup"><?php echo $data['moto_hidup']; ?></textarea></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="kembali" value="Kembali Ke Home"></center></td>
					<td colspan="2"><center><input type="submit" name="update" value="Update"></center></td>
				</tr>
				<?php }
				if (isset($_POST['update'])) {
					$nama = $_POST['nama'];
					$tanggal_lahir = $_POST['tanggal_lahir'];
					$jenis_kelamin= $_POST['jenis_kelamin'];
					$prodi = $_POST['prodi'];
					$fakultas = $_POST['fakultas'];
					$asal = $_POST['asal'];
					$moto_hidup = $_POST['moto_hidup'];
					if ($NIM == is_numeric($NIM)) {
							if (strlen($NIM)==10) {
								if ( strlen($Nama)<=30 && strlen($Nama)>0) {
										$update = "UPDATE data SET nama = '$nama',  tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', prodi = '$prodi', fakultas = '$fakultas', asal = '$asal', moto_hidup = '$moto_hidup' WHERE nim = '$nim'";
										if (mysqli_query($konek,$update)) {
											echo "Data Anda Berhasil Terupdate";
											header("Location:home.php");
										}
										else{
											echo "Data Anda Gagal Terupdate";
											header("Location:update.php");
										}
								}
							}
						}
				}
				if (isset($_POST['kembali'])) {
					header("Location:home.php");
				}
				?>
			</form>
		</table>
	</center>
</body>
</html>
