<html>
<head>
<title>REKAYASA WEB</title>
</head>
<body>
Hallo <?php echo $nama_mahasiswa ?>
<br>
<h4>Daftar Nama Dosen</h4>
<table border="1">
	<tr>
		<td>Niy</td>
		<td>Nama</td>
		<td>Alamat</td>
	</tr>
	<?php foreach($dosen as $data):?>
		<tr>
			<td><?php echo $data['niy']?></td>
			<td><?php echo $data['nama']?></td>
			<td><?php echo $data['alamat']?></td>
		</tr>
	<?php endforeach?>
</table>
<hr>
<h4>Tambah Data Mahasiswa</h4>
<a type="button" href="<?php echo base_url()?>index.php/Mahasiswa/tambah" class="btn btn-primary" role="button">Tambah Data</a>
<hr>
<h4>Daftar Nama Mahasiswa</h4>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nim</td>
		<td>Nama</td>
		<td>Alamat</td>
	</tr>
	<?php foreach($data_mahasiswa as $data):?>
		<tr>
			<td><?php echo $data->id?></td>
			<td><?php echo $data->nim?></td>
			<td><?php echo $data->nama?></td>
			<td><?php echo $data->alamat?></td>
			<td> <a href="<?php echo base_url()?>index.php/Mahasiswa/update/<?php echo $data->id; ?>" class="btn btn-warning" role="button">Update</a></td>
            <td> <a href="<?php echo base_url()?>index.php/Mahasiswa/hapus/<?php echo $data->id; ?>" class="btn btn-danger" role="button">Delete</a></td>
		</tr>
	<?php endforeach?>
</table>
<hr>

</body>
</html>
