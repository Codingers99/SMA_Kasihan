<!DOCTYPE html>
<html>
<body>
<div class="container">
    <h2>Tambah mahasiswa</h2>
    <form action="<?php echo base_url()?>index.php/Mahasiswa/simpan_mahasiswa" method="post">
	<div class="form-group">
            <input type="hidden" name="id" class="form-control" value="" />
        </div>
        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" class="form-control" placeholder="NIM" />
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" />
        </div>
        <div class="form-group">
            <label>Alamat :</label>
            <input type="text" name="alamat" class="form-control" placeholder="alamat" />
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>

    </form>
</div>
</body>
</html>
