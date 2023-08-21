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
                        Fisika
                     
                    </div>

            <!-- Kolom Materi dan tugas -->
                    <div class="container_tugas_user">
                <!-- Perulangan content materi dan tugas -->
                        <div class="content_materi_tugas">
                            <!-- Judul Pertemuan -->
                            <div class="container_title_content_materi_tugas mb-2 bg-white">
                                <div class="title_content_materi_tugas ms-2 bg_color4">
                                <!-- Pertemuan 1 <?php echo "1" ?> -->
                                Tugas 1 : 
                                Gelombang Elektromagnetik
                                <!-- <?php echo "Gelombang Elektromagnetik" ?> -->
                                </div>
                            </div>
                            <!-- Judul Pertemuan -->

                            <div class="container_detail py-3 px-3 bg-white">
                            <!-- Deskripsi Tugas -->
                                <div class="deskripi_content_materi_tugas">
                                    <!-- Skenario Pembelajaran:
                                    Materi: Relativitas Khusus
                                    
                                    Skenario:
                                    1. Siswa mendownlaod materi dan mempelajarinya
                                    2. Siswa melakukan review dan analisa materi. Buat makalah dan submit -->
                                    
                                    <p>1. Siswa mendownlaod materi dan mempelajarinya.</p>
                                    <p>2. Siswa melakukan review dan analisa dari materi tersebut kerjakan sesuai dengan petunjuk soal.</p>
                                </div>
                            <!-- Deskripsi Tugas -->
                                
                            <!-- Keterangan Tugas -->
                                <div class="container_keterangan_tugas_user">
                                    <!-- <p>Jumlah kesempatan</p>
                                    <p>Status pengumpulan</p>
                                    <p>Status penilaian</p>
                                    <p>Batas waktu</p>
                                    <p>Waktu tersisa</p>
                                    <p>Pemutahiran terakhir</p> -->

                                    <div class="d-flex align-items-lg-center align-items-md-center align-items-sm-center keterangan_tugas_user">
                                        <div class="left">
                                            Jumlah kesempatan
                                        </div>
                                        <div class="right">
                                            Ini adalah kesempatan ke-1 (1 kesempatan diizinkan).
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center keterangan_tugas_user">
                                        <div class="left">
                                            Status pengumpulan
                                        </div>
                                        <div class="right">
                                            Belum dikumpulkan
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center keterangan_tugas_user">
                                        <div class="left">
                                            Status penilaian
                                        </div>
                                        <div class="right">
                                            Tak ditandai
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center keterangan_tugas_user">
                                        <div class="left">
                                            Batas waktu
                                        </div>
                                        <div class="right">
                                            Tuesday, 13 April 2023, 23:59
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-lg-center align-items-md-center align-items-sm-center keterangan_tugas_user">
                                        <div class="left">
                                            Waktu tersisa
                                        </div>
                                        <div class="right">
                                            Penugasan tersisa 11 jam 12 min
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center keterangan_tugas_user ">
                                        <div class="left">
                                            Pemutahiran terakhir
                                        </div>
                                        <div class="right">
                                            Tuesday, 13 April 
                                        </div>
                                    </div>

                                    </div>
                                <!-- Keterangan Tugas -->
                                    
                                <!-- Tugas Pertemuan -->
                                    <div class="container_pengiriman_bekas_tugas_user">
                                        Pengiriman berkas
                                    <!-- file yang diupload akan muncul disini -->
                                    </div>
                                <!-- Tugas Pertemuan -->

                                <!-- Komentar Pertemuan -->
                                    <div class="container_kolom_komentar_tugas_user">
                                    Komentar pengumpulan
                                    <div class="kolom_komentar_tugas_user">
                                        <form enctype="multipart/form-data">
                                        <textarea class="w-100" name="" id=""></textarea>
                                        <div class="d-flex justify-content-end w-10">
                                            <button class="btn btn-secondary">Kirim</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            <!-- Komentar Pertemuan -->

                            </div>
                        </div>
                <!-- Perulangan content materi dan tugas -->
                    </div>
            <!-- Kolom Materi dan tugas -->

            <!-- Tombol pop up upload file -->
                    <div class="d-flex justify-content-center align-items-center btn_modal w-100">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajukanPengumpulan">
                        Ajukan pengumpulan
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="ajukanPengumpulan" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content bg_color1">
                                    <div class="d-flex justify-content-end p-3">
                                        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="file" name="" class="text-white pb-2">
                                        <embed class="w-100" type="application/pdf" src="Program 1.pdf#toolbar=0&navpanes=1" height="300"></embed>
                                        <!-- <embed class="w-100" type="application/pdf" src="<?php echo "" ?>.pdf#toolbar=0&navpanes=1" height="300"></embed> -->
                                    </div>
                                    <div class="d-flex justify-content-center pb-3">
                                        <button type="button" class="btn btn-light">Kumpulkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Button trigger modal -->
        <!-- Tombol pop up upload file -->

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
