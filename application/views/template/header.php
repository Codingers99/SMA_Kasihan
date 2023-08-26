<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Heritage Barber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		
<style>
  .navbar-nav li.nav-item a.nav-link:hover {
    color: red; /* Ganti warna sesuai keinginan */
  }
</style>

<div class="container-fluid py-3 d-flex align-items-center bg_color1">
    <div class="container-xxl">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-8">
          <div class="row h-100 justify-content-center align-content-center">
            <img class="img-fluid img_navbar_mobile" src="<?= base_url('/asset/image 6.png')?>" alt="" href="<?php echo base_url()?>elearning">
          </div>
        </div>

        <div class="d-flex col-lg-2 offset-lg-6 col-md-6 col-sm-4 col-4 p-0 justify-content-end align-items-center">
          <!-- Nama Profil -->
          <div class="container_profil_daftar_mapel" id="btn_logout">
            <div class="d-flex align-items-center profil_daftar_mapel w-100">
              <div class="img_profil_daftar_mapel bg_color2">
                <img src="<?= base_url('/asset/user.png')?>" alt="">
              </div>
              <div class="d-flex justify-content-center align-items-center text_profil_daftar_mapel w-100 bg_color2">
							<?= $this->session->userdata('nama'); ?>
              </div>
            </div>
          </div>
          <!-- Nama Profil -->

          <!-- Tombol detail profil dan logout -->
          <div class="container_profil_daftar_mapel d-none" id="btn_show">
            <div class="profil_daftar_mapel_mobile">
              <a href="<?php echo base_url()?>elearning/profile">
                <div class="d-flex justify-content-center align-items-center profil_user bg-white">
                  Profil
                </div>
              </a>
              <form action="<?php echo base_url()?>auth/logout">
                <button class="d-flex justify-content-center align-items-center logout_user border-0 bg-white">Logout</button>
    				</form>
            </div>
          </div>
          <!-- Tombol detail profil dan logout -->

        </div>
      </div>
    </div>
  </div>
  </head>
</head>
<body>
