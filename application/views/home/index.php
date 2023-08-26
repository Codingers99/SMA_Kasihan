<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href=""> -->
    <link rel="stylesheet" href="<?= base_url('/style/style.css')?>">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

	<?php 
	$checksession = $this->session->has_userdata('acc_status');
	if($checksession): ?>
	<!-- header2 -->
	<?php $this->load->view('./template/header.php'); ?>
  <!-- header -->
  <?php else: ?>
    <!-- Header -->
    <div class="container-fluid py-2 bg_color1">
        <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="row h-100 justify-content-center align-content-center">
                <img class="img-fluid img_navbar" src="<?php echo base_url(); ?>asset/image 6.png" alt="" href="<?php echo base_url()?>elearning">
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
  <?php endif; ?>

    <!-- Content -->
    <div class="container-fluid p-lg-5 p-md-5 p-sm-5 p-3">
        <div class="container-xxl">
        <div class="row">
            <div class="d-flex d-lg-block col-lg-5 col-md-12 col-sm-12 col-12 justify-content-center ali text-lg-startgn-items-center ">
            <img class="img-fluid" src="<?php echo base_url(); ?>asset/image 7.png" alt="">
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
                        <img class="img_content_home bg_color3" src="<?php echo base_url(); ?>asset/mapel-sub.png" alt="">
                        <h1 class="text_img_content_home text-center text_color1">IPA</h1>
                    </div>
                </div>
            </div>
            <!-- IPA -->

            <!-- IPS -->
            <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 pt-sm-4 ps-sm-4 pe-sm-5 position-relative">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                        <img class="img_content_home bg_color3" src="<?php echo base_url(); ?>asset/mapel-sub.png" alt="">
                        <h1 class="text_img_content_home text-center text_color1">IPS</h1>
                    </div>  
                </div>
            </div>
            <!-- IPS -->

            <!-- Bahasa -->
            <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 py-sm-4 pe-sm-4 ps-sm-5 position-relative">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                        <img class="img_content_home bg_color3" src="<?php echo base_url(); ?>asset/mapel-sub.png" alt="">
                        <h1 class="text_img_content_home text-center text_color1">BAHASA</h1>
                    </div>
                </div>
            </div>
            <!-- Bahasa -->

            <!-- Lainnya -->
            <div class="col-lg-3 p-lg-5 gx-lg-5 col-sm-6 py-sm-4 ps-sm-4 pe-sm-5 position-relative">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="img-text-wrapper d-flex justify-content-center align-items-center">
                        <img class="img_content_home bg_color3" src="<?php echo base_url(); ?>asset/mapel-sub.png" alt="">
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
<script>
    // The classList property returns the CSS classnames of an element.
    const btn = document.getElementById("btn_logout");
    const btnShow = document.getElementById("btn_show").classList;
    const back = document.getElementById("back");
    const btnClass = btn.classList;
    

    btn.addEventListener('click',  () => {
      btnClass.add('d-none')
      btnShow.remove('d-none')
    })

    back.addEventListener('click', () => {
      btnClass.remove('d-none')
      btnShow.add('d-none')
    })
  </script>
</html>
