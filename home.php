<?php 
	session_start();
	$konek = mysqli_connect('localhost','root','','TA7');
	$simpan = "SELECT nim, nama, prodi FROM TA_7"; 
	$lihat = mysqli_query($konek,$simpan);	
?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
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
		<br><h2><b>Homepage Mahasiswa</b></h2>	
				<form action="" method="POST">
					<table border="2">
					<tr>
						<td><center><input type="submit" name="input" value="Input"></center></td>
						<td colspan="2"><input type="text" name="nim" size="60" placeholder="Cari NIM Anda"></td>
						<td><input type="submit" name="cari" value="cari"></td>
						<?php
							$lihat; 
							if (isset($_POST['cari'])) {
								$nim = $_POST['nim'];
								$cari = "SELECT nim, nama, prodi FROM TA_7 WHERE nim = '$nim'";
								$lihat = mysqli_query($konek,$cari);
							}
						?> 
					</tr>
					<tr bgcolor="#f44274">
						<td>NIM</td>
						<td>Nama</td>
						<td>Program Studi</td>
						<td>Aksi</td>
					</tr>
						<?php while ($isi = mysqli_fetch_array($lihat)){?>
					<tr>
						<td><?php echo $isi['nim'];?></td>
						<td><?php echo $isi['nama'];?></td>
						<td><?php echo $isi['prodi'];?></td>
						<td><?php echo "<a href=home.php?nim=".$isi['nim'].">Hapus</a>";?></a></td>
						<td><?php echo "<a href=update.php?nim=".$isi['nim'].">Update</a>";?></a></td>
					</tr>
						<?php } ?>
					<tr>
						<td colspan="3"><center><input type="submit" name="kembali" value="Kembali"></center></td>
					</tr>
					</table>
			</form>
	</center>
</body>
</html>

<?php 
	if (isset($_POST['input'])) {
		header("Location: form.php");
	}
		if (isset($_GET['nim'])) {
			$nim = $_GET['nim'];
			$hapus = "DELETE FROM TA_7 where nim = '$nim'";
			$simpan = mysqli_query($konek,$hapus);
			if ($simpan) {
			header("Location:home.php");
			}
	}	 
	if (isset($_GET['nim'])) {
			$nim = $_GET['nim'];
			$hapus = "UPDATE FROM TA_7 where nim = '$nim'";
			$simpan = mysqli_query($konek,$update);
			if ($simpan) {
			header("Location:home.php");
			}
	}	 
	if (isset($_POST['kembali'])) {
		header("Location:home.php");
	}
?>