<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('../style/style.css')?>">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- Popup Login -->
    <!-- <div class="modal fade" id="Login">
        <div class="modal-dialog">
        <div class="modal-content bg-info">
            <div class="modal-body">
            <form action="" method="post">
                <div class="mb-3 mt-3 d-flex justify-content-center">
                <label for="username" class="form-label"></label>
                <input type="text" class="form-control-lg validate border-0 bg_color3" name="username"
                    placeholder="Username">
                </div>
                <div class="mb-3 d-flex justify-content-center">
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="password" class="form-control-lg validate border-0 bg_color3" name="password"
                    placeholder="Password">
                </div>
                <div class="d-flex justify-content-center mb-3">
                <button type="submit" class="btn bg_color3">Submit</button>
                </div>
                <div class="text-center text_color_white">
                <p>Don't have Account</p>
                <a href="register.php">Register Now</a>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div> -->
    <!-- Popup Login -->

    <!-- Header dengan boostrap
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <img class="navbar-brand img-fluid" src="image 6.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav> -->

    <!-- Header -->
    <div class="container-fluid py-2 bg_color1">
        <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="row h-100 justify-content-center align-content-center">
                <img class="img-fluid img_navbar" src="../asset/image 6.png" alt="">
            </div>
            </div>
            <div class="col-lg-4 offset-lg-4 col-md-12 offset-md-0 col-sm-12 offset-sm-0 a_action">
            <div class="row h-100 justify-content-center align-items-center">
                <a class="d-flex bg_color2 border_color1 btn_navbar align-items-center justify-content-center" href="<?php echo base_url()?>index.php/elearning">HOME</a>
                <a class="d-flex bg_color2 border_color1 btn_navbar align-items-center justify-content-center" href="<?php echo base_url()?>index.php/elearning/login">MASUK</a>
                <a class="d-flex bg_color2 border_color1 btn_navbar align-items-center justify-content-center" href="<?php echo base_url()?>index.php/elearning/register">DAFTAR</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Header -->

    <!-- Content -->
    <div class="container-fluid p-lg-5 p-md-5 p-sm-5 p-3">
        <div class="container-xxl">
        <div class="row">
            <div class="d-flex d-lg-block col-lg-5 col-md-12 col-sm-12 col-12 justify-content-center ali text-lg-startgn-items-center ">
            <img class="img-fluid" src="../asset/image 7.png" alt="">
            </div>
            <!-- <div class="col-lg-7 bg-info"> -->
            <div class="col-lg-7 col-md-12 pt-md-2 pt-xxl-2 pt-3 px-0">
            <div class="container-fluid">
                <h1 class="mt-lg-1 mt-sm-1 text-lg-start text-md-center text_home">Elearning SMAN 1 KASIHAN</h1>
                <p class="mt-2 home_content">Elearning SMAN 1 Kasihan adalah sistem pembelajaran daring Universitas Ahmad Dahlan
                berbasis web.
                Sistem ini dapat
                dijangkau menggunakan PC, Laptop maupun smartphone yang terhubung dalam jaringan internet.Sistem ini
                dibangun untuk
                menjawab tantangan pembelajaran yang dibatasi oleh ruang dan waktu, media belajar dan sumber
                belajar.Kesuksesan tujuan
                pembelajaran berkat kemandirian, kerjasama, partsipasi aktif dan kepercayaan antara dosen, mahasiswa dan
                masyarakat."Di
                atas orang yang berilmu ada orang yang lebih banyak ilmunya. Dan di atas ilmu semua orang ada ilmu Allah
                Yang Maha
                Mengetahui segala sesuatu" QS Yusuf : 76</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Content -->

    <!-- Content -->
    <div class="container-fluid bg_color2">
        <div class="container-xxl">
        <div class="row">
            <div class="col-12 pt-4 mb-sm-5 text-center">
            <h1 class="mt-5" style="color: #DEDEDE;">Mata Pelajaran</h1>
            </div>
        </div>
        <div class="row pt-lg-1 pb-lg-5 pb-5 pt-4 bg_color2">
            <!-- IPA -->
            <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 pt-sm-4 pe-sm-4 ps-sm-5 position-relative">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                        <img class="img_content_home bg_color3" src="../asset/mapel-sub.png" alt="">
                        <h1 class="text_img_content_home text-center text_color1">IPA</h1>
                    </div>
                </div>
            </div>
            <!-- IPA -->

            <!-- IPS -->
            <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 pt-sm-4 ps-sm-4 pe-sm-5 position-relative">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                        <img class="img_content_home bg_color3" src="../asset/mapel-sub.png" alt="">
                        <h1 class="text_img_content_home text-center text_color1">IPS</h1>
                    </div>  
                </div>
            </div>
            <!-- IPS -->

            <!-- Bahasa -->
            <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 py-sm-4 pe-sm-4 ps-sm-5 position-relative">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                        <img class="img_content_home bg_color3" src="../asset/mapel-sub.png" alt="">
                        <h1 class="text_img_content_home text-center text_color1">BAHASA</h1>
                    </div>
                </div>
            </div>
            <!-- Bahasa -->

            <!-- Lainnya -->
            <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 py-sm-4 ps-sm-4 pe-sm-5 position-relative">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                        <img class="img_content_home bg_color3" src="../asset/mapel-sub.png" alt="">
                        <h1 class="text_img_content_home text-center text_color1">LAINNYA</h1>
                    </div>
                </div>
            </div>
            <!-- Lainnya -->

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
