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

    <!-- Content -->
    <div class="container-fluid container_height">
        <div class="container-xxl">
        <div class="d-flex h-100 justify-content-center align-items-center">
            <div class="d-block">
                <h1 class="text-center my-lg-5 my-md-5 my-sm-5 my-4">LOGIN</h1>
                <form action="<?php echo base_url()?>auth/checklogin" method="POST">
                    <input type="text" class="form-control input_login" placeholder="Masukkan Username" name="kode_user">
                    <input type="text" class="form-control my-lg-3 my-md-3 my-sm-3 my-2 input_login" placeholder="Masukkan Password" name="password">
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="rounded-3 button_login shadow-sm">Login</button>
                    </div>
                </form>
                <p class="mb-5 text-center text_login">Belum Memiliki Akun? <a href="<?php echo base_url()?>auth/register">Klik disini untuk Daftar</a></p>
            </div>
        </div>
        </div>
    </div>
    <!-- Content -->

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
