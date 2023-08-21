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
        <div class="container-fluid bg_color3 pb-5 px-0" id="back" style="">
        <div class="container-xxl px-0">
            <div class="container">
            <div class="pt-2">
                <a href=""></a><img class="img_dashboard_user bg_color1" src="<?php echo base_url(); ?>asset/dasboard-logo.png" alt=""></a>
            </div>
            
            <div class="d-flex align-items-center title_materi_tugas mt-2 bg_color4">
                <?php echo "Fisika" ?>
            </div>

            <div class="text_pengumuman_materi_tugas">
                <img src="<?php echo base_url(); ?>asset/pengumuman_user.png" alt="">
                Pengumuman
            </div>
    <!-- Kolom Materi dan tugas -->
            <div class="container_materi_tugas">
        <!-- Perulangan content materi dan tugas -->
                <div class="content_materi_tugas">
                <!-- Judul Pertemuan -->
                <div class="container_title_content_materi_tugas mb-2 bg-white">
                    <div class="title_content_materi_tugas ms-2 bg_color4">
                    <!-- Pertemuan 1 <?php echo "1" ?> -->
                    Pertemuan 1 : 
                    Gelombang Elektromagnetik
                    <!-- <?php echo "Gelombang Elektromagnetik" ?> -->
                    </div>
                </div>
                <!-- Judul Pertemuan -->

                <div class="container_detail py-3 px-3 bg-white">
                <!-- Deskripsi Pertemuan -->
                    <div class="deskripi_content_materi_tugas">
                    <!-- Skenario Pembelajaran:
                    Materi: Relativitas Khusus
                    
                    Skenario:
                    1. Siswa mendownlaod materi dan mempelajarinya
                    2. Siswa melakukan review dan analisa materi. Buat makalah dan submit -->
                    
                    <p>Skenario Pembelajaran:
                        Materi: Relativitas Khusus
                    
                        Skenario:
                        1. Siswa mendownlaod materi dan mempelajarinya
                        2. Siswa melakukan review dan analisa materi. Buat makalah dan submit</p>
                    </div>
                <!-- Deskripsi Pertemuan -->
                    
                <!-- Materi Pertemuan -->
                    <a href="">
                    <div class="materi_content_materi_tugas py-2">
                        <img src="<?php echo base_url(); ?>asset/materi_user.png" alt="">  Materi Relativitas Khusus
                        <div class="deskripsi_materi_tugas">
                        Silahkan download materi ini dan pelajari
                        </div>
                    </div>
                    </a>
                <!-- Materi Pertemuan -->
                    
                <!-- Tugas Pertemuan -->
                    <a href="">
                    <div class="tugas_content_materi_tugas py-2">
                        <img src="<?php echo base_url(); ?>asset/tugas_user.png" alt="">  Tugas pertemuan
                        <div class="deskripsi_materi_tugas">
                        Buatlah makalah mengenai review dan analisa dari materi tersebut yang sesuai dengan petunjuk soal. Buat makalah dan
                        submit.
                        Deadline: 13 April 23 Pkl 23:55
                        </div>
                    </div>
                    </a>
                <!-- Tugas Pertemuan -->
                    </div>
                </div>

                <div class="content_materi_tugas">
                    <!-- Judul Pertemuan -->
                    <div class="container_title_content_materi_tugas mb-2 bg-white">
                    <div class="title_content_materi_tugas ms-2 bg_color4">
                        <!-- Pertemuan 1 <?php echo "1" ?> -->
                        Pertemuan 1 :
                        Gelombang Elektromagnetik
                        <!-- <?php echo "Gelombang Elektromagnetik" ?> -->
                    </div>
                    </div>
                    <!-- Judul Pertemuan -->
                
                    <div class="container_detail py-3 px-3 bg-white">
                    <!-- Deskripsi Pertemuan -->
                    <div class="deskripi_content_materi_tugas">
                        <!-- Skenario Pembelajaran:
                                    Materi: Relativitas Khusus
                                    
                                    Skenario:
                                    1. Siswa mendownlaod materi dan mempelajarinya
                                    2. Siswa melakukan review dan analisa materi. Buat makalah dan submit -->
                
                        <p>Skenario Pembelajaran:
                        Materi: Relativitas Khusus
                
                        Skenario:
                        1. Siswa mendownlaod materi dan mempelajarinya
                        2. Siswa melakukan review dan analisa materi. Buat makalah dan submit</p>
                    </div>
                    <!-- Deskripsi Pertemuan -->
                
                    <!-- Materi Pertemuan -->
                    <a href="">
                        <div class="materi_content_materi_tugas py-2">
                        <img src="<?php echo base_url(); ?>asset/materi_user.png" alt=""> Materi Relativitas Khusus
                        <div class="deskripsi_materi_tugas">
                            Silahkan download materi ini dan pelajari
                        </div>
                        </div>
                    </a>
                    <!-- Materi Pertemuan -->
                
                    <!-- Tugas Pertemuan -->
                    <a href="">
                        <div class="tugas_content_materi_tugas py-2">
                        <img src="<?php echo base_url(); ?>asset/tugas_user.png" alt=""> Tugas pertemuan
                        <div class="deskripsi_materi_tugas">
                            Buatlah makalah mengenai review dan analisa dari materi tersebut yang sesuai dengan petunjuk soal. Buat
                            makalah dan
                            submit.
                            Deadline: 13 April 23 Pkl 23:55
                        </div>
                        </div>
                    </a>
                    <!-- Tugas Pertemuan -->
                    </div>
                </div>

                <div class="content_materi_tugas">
                    <!-- Judul Pertemuan -->
                    <div class="container_title_content_materi_tugas mb-2 bg-white">
                    <div class="title_content_materi_tugas ms-2 bg_color4">
                        <!-- Pertemuan 1 <?php echo "1" ?> -->
                        Pertemuan 1 :
                        Gelombang Elektromagnetik
                        <!-- <?php echo "Gelombang Elektromagnetik" ?> -->
                    </div>
                    </div>
                    <!-- Judul Pertemuan -->
                
                    <div class="container_detail py-3 px-3 bg-white">
                    <!-- Deskripsi Pertemuan -->
                    <div class="deskripi_content_materi_tugas">
                        <!-- Skenario Pembelajaran:
                                    Materi: Relativitas Khusus
                                    
                                    Skenario:
                                    1. Siswa mendownlaod materi dan mempelajarinya
                                    2. Siswa melakukan review dan analisa materi. Buat makalah dan submit -->
                
                        <p>Skenario Pembelajaran:
                        Materi: Relativitas Khusus
                
                        Skenario:
                        1. Siswa mendownlaod materi dan mempelajarinya
                        2. Siswa melakukan review dan analisa materi. Buat makalah dan submit</p>
                    </div>
                    <!-- Deskripsi Pertemuan -->
                
                    <!-- Materi Pertemuan -->
                    <a href="">
                        <div class="materi_content_materi_tugas py-2">
                        <img src="<?php echo base_url(); ?>asset/materi_user.png" alt=""> Materi Relativitas Khusus
                        <div class="deskripsi_materi_tugas">
                            Silahkan download materi ini dan pelajari
                        </div>
                        </div>
                    </a>
                    <!-- Materi Pertemuan -->
                
                    <!-- Tugas Pertemuan -->
                    <a href="">
                        <div class="tugas_content_materi_tugas py-2">
                        <img src="<?php echo base_url(); ?>asset/tugas_user.png" alt=""> Tugas pertemuan
                        <div class="deskripsi_materi_tugas">
                            Buatlah makalah mengenai review dan analisa dari materi tersebut yang sesuai dengan petunjuk soal. Buat
                            makalah dan
                            submit.
                            Deadline: 13 April 23 Pkl 23:55
                        </div>
                        </div>
                    </a>
                    <!-- Tugas Pertemuan -->
                    </div>
                </div>
        <!-- Perulangan content materi dan tugas -->
            </div>
    <!-- Kolom Materi dan tugas -->
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
        </script>
    </body>

</html>
