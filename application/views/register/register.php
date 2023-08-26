<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/style/style.css')?>">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

     <!-- Header -->
	 <div class="container-fluid py-2 bg_color1">
        <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="row h-100 justify-content-center align-content-center">
                <img class="img-fluid img_navbar" src="<?php echo base_url(); ?>asset/image 6.png" alt="">
            </div>
            </div>
            <div class="col-lg-4 offset-lg-4 col-md-12 offset-md-0 col-sm-12 offset-sm-0 a_action">
            <div class="row h-100 justify-content-center align-items-center">
			<a class="d-flex bg_color2 border_color1 btn_navbar align-items-center justify-content-center" href="<?php echo base_url()?>elearning">HOME</a>
                <a class="d-flex bg_color2 border_color1 btn_navbar align-items-center justify-content-center" href="<?php echo base_url()?>auth/login">MASUK</a>
                <a class="d-flex bg_color2 border_color1 btn_navbar align-items-center justify-content-center" href="<?php echo base_url()?>auth/register">DAFTAR</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Header -->

    <!-- content -->
    <div class="container-fluid py-3 container_height">
        <div class="text-center title_register my-3">
            <h2>Pendaftaran Peserta Baru</h2>
        </div>
        <form action="<?php echo base_url()?>auth/register_user" method="POST">
            <div class="container-xxl d-flex justify-content-center">
                <div class="row justify-content-center container_register p-2 bg_color1 text-light">
                    <!-- NIS/NISN -->
                    <div class="row align-items-center mt-2">
                        <div class="d-flex align-items-center col-lg-4 col-md-4 col-sm-4 col-12 pt-2">
                            <label for="nisn" class="form-label">NIS/NISN</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-4 col-12">
                            <input type="text" class="input_register form-control" name="kode_user">
                        </div>
                    </div>
                    <!-- NIS/NISN -->

                 <!-- username -->
				 <div class="row align-items-center mt-2">
                        <div class="d-flex align-items-center col-lg-4 col-md-4 col-sm-4 col-12 pt-2">
                            <label for="kode_user" class="form-label">Nama</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-4 col-12">
                            <input type="text" class="input_register form-control" name="nama">
                        </div>
                    </div>
                    <!-- username -->

                    <!-- Jurusan -->
                    <div class="row align-items-center mt-2">
                        <div class="d-flex align-items-center col-lg-4 col-md-4 col-sm-4 col-12 pt-2">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-4 col-12">
                            <input type="password" class="input_register form-control" name="password">
                        </div>
                    </div>
                    <!-- Jurusan -->
                
                    <!-- Email -->
                    <div class="row align-items-center mt-2">
                        <div class="d-flex align-items-center col-lg-4 col-md-4 col-sm-4 col-12 pt-2">
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-4 col-12">
                            <input type="text" class="input_register form-control" name="email">
                        </div>
                    </div>
                    <!-- Email -->
                
                    <!-- Alamat dan Kode Pos -->
                    <div class="row align-items-center">
                        <div class="d-flex align-items-center col-lg-4 col-md-4 col-sm-4 col-12 pt-2">
                            <label for="alamat" class="form-label">Alamat dan Kode Pos</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-4 col-12">
                            <input type="text" class="input_register form-control" name="alamat">
                        </div>
                    </div>
                    <!-- Alamat dan Kode Pos -->
                
                    <!-- No Whatsapp -->
                    <div class="row align-items-center mt-2 mb-4">
                        <div class="d-flex align-items-center col-lg-4 col-md-4 col-sm-4 col-12 pt-2">
                            <label for="no_wa" class="form-label">No Whatsapp</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-4 col-12">
                            <input type="text" class="input_register form-control" name="no_telp">
                        </div>
                    </div>
                    <!-- No Whatsapp -->
                </div>
            </div>
			<input type="hidden" class="input_register form-control" name="acc_status" value="1">
            <!-- Button -->
            <div class="d-flex justify-content-center w-100">
                <button type="submit" class="button_register text-light me-1 bg-primary">Buat Keanggotaan</button>
                <a class="d-flex justify-content-center align-items-center text-decoration-none button_register text-light ms-1 bg-danger" href="<?php echo base_url()?>auth/login">Batal</a>
            </div>
            <!-- Button -->
        </form>
    </div>
    <!-- content -->

    <!-- footer -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 py-3 bg_color1">
            <div class="container-xxl text_footer">
            <p>Copyright © 2023 by Elearning SMAN 1 KASIHAN</p>
            </div>
        </div>
        </div>
    </div>
    <!-- footer -->
</body>

</html>
