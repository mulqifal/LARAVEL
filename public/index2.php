<!DOCTYPE html>
<html>
<head>
	<title>Input pelanggan</title>
	<link rel="icon" href="https://www.telkom.co.id/data/image_upload/page/1594112895830_compress_PNG%20Icon%20Telkom.png">
</head>
<body>
 
	<h2>Data pelanggan</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PELANGGAN</a>
	<br/>
	<br/>
	<table border="2">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIK</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from langgan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<a href="index1.html">KEMBALI</a>
</body>
</html>