<!DOCTYPE html>
<html>
<body>
<div class="container">
    <h2>Update mahasiswa #<?php echo $ambil->id; ?></h2>
    <form action="<?php echo base_url()?>index.php/Mahasiswa/simpan_update" method="post">
       
        <input type="hidden" name="id"  value="<?php echo $ambil->id; ?>" />
		<div class="form-group">
            <label>NIM :</label>
            <input type="number" name="nim" class="form-control" value="<?php echo $ambil->nim; ?>" placeholder="Nim" />
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $ambil->nama; ?>" placeholder="Nama" />
        </div>
		<div class="form-group">
            <label>Alamat :</label>
            <input type="textbox" name="alamat" class="form-control" value="<?php echo $ambil->alamat; ?>" placeholder="alamat" />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>
</body>
</html>
