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
        <link rel="stylesheet" href="<?= base_url('/style/style_admin.css')?>">
		<link rel="stylesheet" href="<?= base_url('/style/style.css')?>">
        <script src="javascript.js"></script>
    </head>

    <body>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

        <!-- header -->
		<?php $this->load->view('./template/header.php'); ?>
        <!-- header -->

    <!-- content -->
    <div class="container-fluid bg_color3 pb-5 px-0" id="back" style="">
        <div class="container-xxl px-0">
        <div class="container">
            <div class="pt-2">
            <a href="<?php echo base_url()?>admin/manajemen_kelas.php"><img class="img_dashboard_user bg_color1" src="<?php echo base_url(); ?>asset/btn_back.png" alt=""></a>
            </div>

            <div class="d-flex align-items-center title_materi_tugas title_manajemen_pertemuan mt-2 bg_color4">
            Nama mata pelajaran dan nama kelas
            </div>

            <div class="text-end tambah_pertemuan">
            <form method="" action="">
                <button class="btn btn-secondary btn_tambah_pertemuan">Lihat Tugas</button>
                <button class="btn btn-primary btn_tambah_pertemuan">+ Pertemuan</button>
            </form>
            
            <!-- <a href="<?php echo base_url()?>admin/nilai_manajemen_tugas.php"><button class="btn btn-secondary">Lihat Tugas</button></a>
            <a href="<?php echo base_url()?>admin/tambah_pertemuan.php"><button class="btn btn-primary">+ Pertemuan</button></a> -->
            </div>

            <!-- Kolom Materi dan tugas -->
            <div class="container_materi_tugas">
            <!-- Perulangan content materi dan tugas -->
            <div class="content_materi_tugas">
                <!-- Judul Pertemuan -->
                <div class="container_title_content_materi_tugas mb-2 bg-white">
                <div class="d-flex justify-content-between title_content_materi_tugas ms-2 bg_color4">
                    <!-- Pertemuan 1 <?php echo "1" ?> -->
                    Pertemuan 1 :
                    Gelombang Elektromagnetik
                    <!-- <?php echo "Gelombang Elektromagnetik" ?> -->
                    <div class="dropdown">
                    <button class="btn_three_dot text-light bg_color4" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="">
                        <img src="<?php echo base_url(); ?>asset/there_dot.png" alt="">
                        </div>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-black" href="<?php echo base_url()?>admin/tambah_materi.php">Tambah Materi</a></li>
                        <li><a class="dropdown-item text-black" href="<?php echo base_url()?>admin/tambah_tugas.php">Tambah Tugas</a></li>
                        <li><a class="dropdown-item text-black" href="<?php echo base_url()?>admin/edit_pertemuan.php">Edit Pertemuan</a></li>
                        <li><a class="dropdown-item text-black" href="<?php echo base_url()?>admin/hapus_tugas.php">Hapus Pertemuan</a></li>
                    </ul>
                    </div>
                </div>
                </div>
                <!-- Judul Pertemuan -->

                <div class="container_detail py-3 px-3 bg-white">
                <!-- Deskripsi Pertemuan -->
                <div class="deskripi_content_pertemuan">
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
                    <div class="d-flex justify-content-between align-items-center materi_content_materi_tugas py-2">
                    <img src="<?php echo base_url(); ?>asset/materi_user.png" alt=""> Materi Relativitas Khusus
                    <div class="deskripsi_materi_manajemen_pertemuan">
                        Silahkan download materi ini dan pelajari
                    </div>
                    <div class="action_manajemen_pertemuan text-end">
                        <a href=""><img src="<?php echo base_url(); ?>asset/edit.png" alt=""></a>
                        <a href=""><img src="<?php echo base_url(); ?>asset/delete.png" alt=""></a>
                    </div>
                    </div>
                </a>
                <!-- Materi Pertemuan -->

                <!-- Tugas Pertemuan -->
                <a href="tugas_user.php">
                    <div class="d-flex justify-content-between align-items-center tugas_content_materi_tugas py-2">
                    <img src="<?php echo base_url(); ?>asset/tugas_user.png" alt=""> Tugas pertemuan
                    <div class="deskripsi_tugas_manajemen_pertemuan">
                        Buatlah makalah mengenai review dan analisa dari materi tersebut yang sesuai dengan petunjuk soal.
                        Buat makalah dan
                        submit.
                        Deadline: 13 April 23 Pkl 23:55
                    </div>
                    <div class="action_manajemen_pertemuan text-end">
                        <a href=""><img src="<?php echo base_url(); ?>asset/edit.png" alt=""></a>
                        <a href=""><img src="<?php echo base_url(); ?>asset/delete.png" alt=""></a>
                    </div>
                    </div>
                </a>
                <!-- Tugas Pertemuan -->
                </div>
            </div>

            <div class="container_materi_tugas">
                <!-- Perulangan content materi dan tugas -->
                <div class="content_materi_tugas">
                <!-- Judul Pertemuan -->
                <div class="container_title_content_materi_tugas mb-2 bg-white">
                    <div class="d-flex justify-content-between title_content_materi_tugas ms-2 bg_color4">
                    <!-- Pertemuan 1 <?php echo "1" ?> -->
                    Pertemuan 1 :
                    Gelombang Elektromagnetik
                    <!-- <?php echo "Gelombang Elektromagnetik" ?> -->
                    <div class="dropdown">
                        <button class="btn_three_dot text-light bg_color4" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="">
                            <img src="<?php echo base_url(); ?>asset/there_dot.png" alt="">
                        </div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-black" href="tambah_materi.php">Tambah Materi</a></li>
                        <li><a class="dropdown-item text-black" href="tambah_tugas.php">Tambah Tugas</a></li>
                        <li><a class="dropdown-item text-black" href="edit_pertemuan.php">Edit Pertemuan</a></li>
                        <li><a class="dropdown-item text-black" href="hapus_tugas.php">Hapus Pertemuan</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <!-- Judul Pertemuan -->
            
                <div class="container_detail py-3 px-3 bg-white">
                    <!-- Deskripsi Pertemuan -->
                    <div class="deskripi_content_pertemuan">
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
                    <div class="d-flex justify-content-between align-items-center materi_content_materi_tugas py-2">
                        <img src="<?php echo base_url(); ?>asset/materi_user.png" alt=""> Materi Relativitas Khusus
                        <div class="deskripsi_materi_manajemen_pertemuan">
                        Silahkan download materi ini dan pelajari
                        </div>
                        <div class="action_manajemen_pertemuan text-end">
                        <a href=""><img src="<?php echo base_url(); ?>asset/edit.png" alt=""></a>
                        <a href=""><img src="<?php echo base_url(); ?>asset/delete.png" alt=""></a>
                        </div>
                    </div>
                    </a>
                    <!-- Materi Pertemuan -->
            
                    <!-- Tugas Pertemuan -->
                    <a href="tugas_user.php">
                    <div class="d-flex justify-content-between align-items-center tugas_content_materi_tugas py-2">
                        <img src="<?php echo base_url(); ?>asset/tugas_user.png" alt=""> Tugas pertemuan
                        <div class="deskripsi_tugas_manajemen_pertemuan">
                        Buatlah makalah mengenai review dan analisa dari materi tersebut yang sesuai dengan petunjuk soal.
                        Buat makalah dan
                        submit.
                        Deadline: 13 April 23 Pkl 23:55
                        </div>
                        <div class="action_manajemen_pertemuan text-end">
                        <a href=""><img src="<?php echo base_url(); ?>asset/edit.png" alt=""></a>
                        <a href=""><img src="<?php echo base_url(); ?>asset/delete.png" alt=""></a>
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
        const back = document.getElementById("back");

        back.addEventListener('click', () => {
        btnClass.remove('d-none')
        btnShow.add('d-none')
        })
    </script>
</body>

</html>
