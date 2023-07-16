<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
    </head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- Popup Login -->
    <div class="modal fade" id="Login">
        <div class="modal-dialog">
        <div class="modal-content bg_color1">
            <div class="modal-body">
            <form action="" method="post">
                <div class="mb-3 mt-3 d-flex justify-content-center">
                    <label for="username" class="form-label"></label>
                    <input type="text" class="form-control-lg validate border-0 bg_color3" name="username" placeholder="Username">
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <label for="exampleInputPassword1" class="form-label"></label>
                    <input type="password" class="form-control-lg validate border-0 bg_color3" name="password" placeholder="Password">
                </div>
                <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
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
    </div>
    <!-- Popup Login -->

    <!-- Header -->
    <div class="container-fluid py-2 bg_color1">
        <div class="row">
        <div class="col-lg-4 col-sm-12 col-xs-6">
            <div class="row h-100 justify-content-center">
            <img class="img-fluid" src="image 6.png" alt="">
            </div>
        </div>
        <div class="col-lg-4 offset-lg-4 col-sm-12 offset-sm-0 a_action">
            <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-3 mx-lg-2 col-sm-3 my-sm-3 col-3 my-3">
                <button class="w-100 py-2 rounded-3 bg_color2 border_color1">
                <a href="home.php">HOME</a></button>
            </div>
            <div class="col-lg-3 mx-lg-2 col-sm-3 my-sm-3 col-3 my-3">
                <button type="button" class="w-100 py-2 rounded-3 bg_color2 border_color1 font_weight_400" data-bs-toggle="modal" data-bs-target="#Login">MASUK</button>
            </div>
            <div class="col-lg-3 mx-lg-2 col-sm-3 my-sm-3 col-3 my-3">
                <button class="w-100 py-2 rounded-3 bg_color2 border_color1 text-black">
                <a href="register.php">DAFTAR</a></button>
                <!-- <a href="register.php">DAFTAR</a> -->
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Header -->

    <!-- Content -->
    <div class="container-fluid p-5 bg-ligh">
        <div class="row">
        <div class="col-lg-5 col-sm-12 pt-sm-2">
            <img class="col-xl-12 col-lg-5 img-fluid" src="image 7.png" alt="">
        </div>
        <div class="col-lg-7 col-sm-12 px-sm-2">
            .<div class="container-fluid">
            <h1 class="mt-lg-1 mt-sm-1">Elearning SMAN 1 KASIHAN</h1>
            <p class="mt-2 title">Elearning SMAN 1 Kasihan adalah sistem pembelajaran daring Universitas Ahmad Dahlan
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
    <!-- Content -->

    <!-- Content -->
    <div class="container-fluid bg_color1">
        <div class="row">
        <div class="col-12 pt-4 mb-5 text-center">
            <h1 class="mt-5" style="color: white;">Mata Pelajaran</h1>
        </div>
        </div>
        <div class="row pt-lg-5 pb-lg-5 mt-lg-2 bg_color1">
        <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 pt-sm-4 pe-sm-4 ps-sm-5 position-relative">
            <div class="row h-100 justify-content-center align-items-center">
            <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                <img class="img-fluid img_content bg_color3" src="mapel-sub.png" alt="">
                <h1 class="text_content text-center text_color1">IPA</h1>
            </div>
            </div>
        </div>
        <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 pt-sm-4 ps-sm-4 pe-sm-5 position-relative">
            <div class="row h-100 justify-content-center align-items-center">
            <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                <img class="img-fluid img_content bg_color3" src="mapel-sub.png" alt="">
                <h1 class="text_content text-center text_color1">IPS</h1>
            </div>
            </div>
        </div>
        <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 py-sm-4 pe-sm-4 ps-sm-5 position-relative">
            <div class="row h-100 justify-content-center align-items-center">
            <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                <img class="img-fluid img_content bg_color3" src="mapel-sub.png" alt="">
                <h1 class="text_content text-center text_color1">BAHASA</h1>
            </div>
            </div>
        </div>
        <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 py-sm-4 ps-sm-4 pe-sm-5 position-relative">
            <div class="row h-100 justify-content-center align-items-center">
            <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                <img class="img-fluid img_content bg_color3" src="mapel-sub.png" alt="">
                <h1 class="text_content text-center text_color1">LAINNYA</h1>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Content -->

    <!-- footer -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 py-3 bg_color3">
            <div class="container">
            <p>Copyright © 2023 by Elearning SMAN 1 KASIHAN</p>
            </div>
        </div>
        </div>
    </div>
    <!-- footer -->
</body>

</html>