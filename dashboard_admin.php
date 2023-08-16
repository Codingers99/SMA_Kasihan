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
    <script src="javascript.js"></script>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- header -->
    <div class="container-fluid py-3 d-flex align-items-center bg_color1">
        <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="row h-100 justify-content-center align-content-center">
                <img class="img-fluid img_navbar" src="image 6.png" alt="">
            </div>
            </div>

            <div class="d-flex col-lg-2 offset-lg-6 p-0 justify-content-end align-items-center">
            <div class="container_profil_daftar_mapel">
                <div class="d-flex align-items-center profil_daftar_mapel bg_color2">
                <div class="img_profil_daftar_mapel">
                    <img src="user_admin.png" alt="">
                </div>
                <div class="d-flex justify-content-center align-items-center text_profil_daftar_mapel w-100">
                    Admin
                </div>
                </div>
            </div>
            </div>

            <!-- <div class="">
            <div class="row h-100 w-100 align-items-center justify-content-center">
                <div class="col-lg-2 offset-lg-2 col-2 size_33 d-flex justify-content-center align-items-center bg-info">
                <img src="user.png" alt="" class="size_33 bg-danger">
                </div>
                <div class="col-lg-7 col-8 height_33px ps-2 d-flex align-items-center justify-content-center bg-danger"
                style="width: 107px;">
                <?php echo "untuk nama dari user" ?>
                hhhj

                Ini nanti ada pakai javascript
                <a href="">untuk logut</a>
                <a href="">untuk ke halaman profile</a>
                </div>
            </div>
            </div> -->
        </div>
        </div>
    </div>
    <!-- header -->

    <!-- content -->
    <div class="container-fluid pt-3 bg_color3">
        <div class="container-xxl">
        <div class="container">
            <div class="dropdown">
            <button class="container_menu_admin bg_color1 text-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="img_menu_admin">
                <img src="menu_admin.png" alt="">
                </div>
                <div class="d-flex justify-content-center align-items-center w-100 text_menu_admin">Menu</div>
            </button>
            <ul class="dropdown-menu bg_color1" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item text-light" href="#">Dashboard</a></li>
                <li><a class="dropdown-item text-light" href="#">Manajemen Kelas</a></li>
                <li><a class="dropdown-item text-light" href="#">Mata Pelajaran</a></li>
                <li><a class="dropdown-item text-light" href="#">Manajemen Tugas/Quiz</a></li>
            </ul>
            </div>

            <div class="d-flex align-items-center justify-content-center container_content_admin">
            <img class="px-3" src="materi_admin.png" alt="">
            <img class="px-3" src="tugas_admin.png" alt="">
            <img class="px-3" src="datakelas_admin.png" alt="">
            </div>
        </div>
        </div>
    </div>
    <!-- content -->

    <!-- footer -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 py-3 bg_color1">
            <div class="container text_footer">
            <p>Copyright © 2023 by Elearning SMAN 1 KASIHAN</p>
            </div>
        </div>
        </div>
    </div>
    <!-- footer -->
</body>

</html>