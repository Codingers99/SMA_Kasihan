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
	<?php $this->load->view('./template/header.php'); ?>
  <!-- header -->

  <!-- content -->
  <div class="container-fluid bg_color3" id="back" style="min-height : 800px">
    <div class="container-xxl">
      <div class="container">
        <div class="pt-2">
				<a href="<?php echo base_url(); ?>elearning/mapel"><img class="img_dashboard_user" src="<?php echo base_url(); ?>asset/dasboard-logo.png" alt=""></a>
                    <a href="<?php echo base_url(); ?>elearning/list_mapel"><img class="img_list_mapel" src="<?php echo base_url(); ?>asset/book.png" alt=""></a>
        </div>
        <div class="row mt-2 mb-lg-4 mb-md-4 mb-3">
          <div class="col-12 bg_color4">
            <div class="d-flex align-items-center py-2">
              <div class="d-flex align-items-center container_img_book_user">
                <img class="img_book_user" src="<?= base_url('/asset/book.png')?>" alt="">
              </div>
              <div class="d-flex align-items-center text_mapel_user w-100">
                Daftar Mata Pelajaran
              </div>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pb-4 container_card_daftar_mapel">
          <!-- LAKUKAN PERULANGAN -->
					<?php foreach ($data_elearning as $data) : ?>
          <!-- <?php //for() ?> -->
					<a href="<?php echo base_url()?>index.php/elearning/mapel/<?php echo $data->nama_mapel ?>">
            <div class="col">
              <div class="card card_daftar_mapel">
                <div class="d-flex justify-content-center align-items-center card-img-top bg-warning">
                  <img src="<?= base_url('/asset/mapel-sub.png')?>" class="card-img-top img_card_daftar_mapel" alt="...">
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <!-- <p class="card-title fs-5"><?php ?></p> -->
                      <p class="card_title"><?php echo $data->nama_mapel?></p>
                    </div>
                    <div class="col-6 text-end">
                      <img src="<?= base_url('/asset/there_dot.png')?>" alt="">
                    </div>
                  </div>
                  <!-- <h2 class="card-text"><?php ?></h2> -->
                  <h2 class="card_text"><?php echo $data->guru_mapel?></h2>
                </div>
              </div>
            </div>
				</a>
				<?php endforeach; ?>
          <!-- <?php ?> -->
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
