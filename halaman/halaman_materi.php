<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8" />

	<!-- Bootstrap core CSS     -->
    <link href="office/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="office/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

	<div class="halaman">
		<h2>Materi Zakat</h2>
		<a href="halaman/form_tambah_materi.php">+ TAMBAH MATERI </a>
		<br/>
		<br/>
		<table border="1">
			<tr>
				<th>NO</th>
				<th>Jenis Zakat</th>
				<th>OPSI</th>
			</tr>
			<?php 
			include 'utils/config.php';
			$no = 1;
			$data = mysqli_query($db,"select jenis_zakat from kategori_materi_zakat");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['jenis_zakat']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
						<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
					</td>
				</tr>
				<?php 
			}
			?>
		</table>
	</div>

</body>
</html>

