<!DOCTYPE html>
<html>
<head>
	<title>Tambah Materi</title>

	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body>
	<div class="badan">
		<div class="halaman">
			<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
			<br/>
			<a href="../index.php">KEMBALI</a>
			<br/>
			<br/>
			<h3>TAMBAH DATA MAHASISWA</h3>
			<form method="post" action="tambah_aksi.php">
				<table>
					<tr>			
						<td>Nama</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td><input type="number" name="nim"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"></td>
					</tr>		
				</table>
			</form>
		</div>
	</div>
</body>
</html>