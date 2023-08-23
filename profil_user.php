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
    <link rel="stylesheet" href="<?= base_url('/style/style.css')?>">
    <script src="<?= base_url('/style/javascript.js')?>"></script>
    </head>

    <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- header -->
    <div class="container-fluid py-3 d-flex align-items-center bg_color1">
        <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 col-8">
            <div class="row h-100 justify-content-center align-content-center">
                <img class="img-fluid img_navbar_mobile" src="<?php echo base_url(); ?>asset/image 6.png" alt="">
            </div>
            </div>

            <div class="d-flex col-lg-2 offset-lg-6 col-md-6 col-sm-4 col-4 p-0 justify-content-end align-items-center">
            <!-- Nama Profil -->
            <div class="container_profil_daftar_mapel" id="btn_logout">
                <div class="d-flex align-items-center profil_daftar_mapel w-100">
                <div class="img_profil_daftar_mapel bg_color2">
                    <img src="<?php echo base_url(); ?>asset/user.png" alt="">
                </div>
                <div class="d-flex justify-content-center align-items-center text_profil_daftar_mapel w-100 bg_color2">
                    Munandar
                </div>
                </div>
            </div>
            <!-- Nama Profil -->

            <!-- Tombol detail profil dan logout -->
            <div class="container_profil_daftar_mapel d-none" id="btn_show">
                <div class="profil_daftar_mapel_mobile">
                <a href="profil.php">
                    <div class="d-flex justify-content-center align-items-center profil_user bg-white">
                    Profil
                    </div>
                </a>
                <a href="">
                    <div class="d-flex justify-content-center align-items-center logout_user bg-white">
                    Logout
                    </div>
                </a>
                </div>
            </div>
            <!-- Tombol detail profil dan logout -->
            </div>
        </div>
        </div>
    </div>
    <!-- header -->

    <!-- content -->
    <div class="container-fluid bg_color3 pb-5 px-0" id="back">
        <div class="container-xxl px-0">
        <div class="container">
            <div class="pt-2">
            <a href="daftar_mapel.php"><img class="img_dashboard_user bg_color1" src="<?php echo base_url(); ?>asset/dasboard-logo.png" alt=""></a>
            </div>

            <div class="d-flex align-items-center container_profil_profil w-100 mt-4 mb-lg-4 mb-md-4 mb-sm-4 mb-3">
            <div class="img_profil_profil bg_color2">
                <img class="" src="<?php echo base_url(); ?>asset/profil_user.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center text_profil_profil bg_color2">
                Munandar
            </div>
            </div>

            <div class="d-flex parent_container_detail_pengguna_profil justify-content-center align-items-center w-100">
            <div class="container_detail_pengguna_profil w-100 px-3 pb-3 bg-white">
                <div
                class="title_detail_pengguna_profil mt-lg-4 mt-md-4 mt-sm-4 mb-lg-3 mb-md-3 mb-sm-3 mb-2 p-1 ps-3 bg_color4">
                Detail Pengguna
                </div>

                <div class="edit_profil text-end" id="btn_edit_profil">
                    <button>Edit Profil</button>
                </div>

                <div class="" id="view_profil_user">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center text_detail_pengguna_profil">
                    Alamat Email
                    </div>
                    <div class="titik2_detail_pengguna_profil">
                    :
                    </div>
                    <div class="text_deskripsi_detail_pengguna_profil">
                    munandar@gmail.com
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center text_detail_pengguna_profil">
                    NISN
                    </div>
                    <div class="titik2_detail_pengguna_profil">
                    :
                    </div>
                    <div class="text_deskripsi_detail_pengguna_profil">
                    munandar@gmail.com
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center text_detail_pengguna_profil">
                    No Telp
                    </div>
                    <div class="titik2_detail_pengguna_profil">
                    :
                    </div>
                    <div class="text_deskripsi_detail_pengguna_profil">
                    munandar@gmail.com
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center text_detail_pengguna_profil">
                    Alamat Asal
                    </div>
                    <div class="titik2_detail_pengguna_profil">
                    :
                    </div>
                    <div class="text_deskripsi_detail_pengguna_profil">
                    munandar@gmail.com
                    </div>
                </div>
                </div>

                <div class="d-none" id="view_edit_profil">
                <form action="">
                    <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center text_detail_pengguna_profil">
                        Alamat Email
                    </div>
                    <div class="titik2_detail_pengguna_profil">
                        :
                    </div>
                    <div class="text_deskripsi_detail_pengguna_profil">
                        <input type="text">
                    </div>
                    </div>

                    <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center text_detail_pengguna_profil">
                        NISN
                    </div>
                    <div class="titik2_detail_pengguna_profil">
                        :
                    </div>
                    <div class="text_deskripsi_detail_pengguna_profil">
                        <input type="text">
                    </div>
                    </div>

                    <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center text_detail_pengguna_profil">
                        No Telp
                    </div>
                    <div class="titik2_detail_pengguna_profil">
                        :
                    </div>
                    <div class="text_deskripsi_detail_pengguna_profil">
                        <input type="text">
                    </div>
                    </div>

                    <div class="d-flex alamat_asal">
                    <div class="text_detail_pengguna_edit">
                        Alamat Asal
                    </div>
                    <div class="titik2_detail_pengguna_edit">
                        :
                    </div>
                    <div class="text_deskripsi_detail_pengguna_edit">
                        <textarea name="" id=""></textarea>
                    </div>
                    </div>

                    <div class="btn_edit_profil_user text-end">
                    <button class="btn btn-success" type="">Simpan</button>
                    <a href="profil_user.php" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
                </div>

            </div>
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

    <script>
        // The classList property returns the CSS classnames of an element.
        const btn = document.getElementById("btn_logout");
        const btnShow = document.getElementById("btn_show").classList;
        const back = document.getElementById("back");
        const btnClass = btn.classList;


        btn.addEventListener('click', () => {
            btnClass.add('d-none')
            btnShow.remove('d-none')
        })

        back.addEventListener('click', () => {
            btnClass.remove('d-none')
            btnShow.add('d-none')
        })

        const btn_edit_profil = document.getElementById("btn_edit_profil");
        const edit_profil = document.getElementsByClassName("edit_profil")[0].classList;
        const view_profil_user = document.getElementById("view_profil_user").classList;
        const view_edit_profil = document.getElementById("view_edit_profil").classList;

        btn_edit_profil.addEventListener('click', () => {
            edit_profil.add('d-none');
            view_profil_user.add('d-none');
            view_edit_profil.remove('d-none');
        })

    </script>
</body>

</html>