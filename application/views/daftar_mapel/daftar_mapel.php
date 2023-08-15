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
      <div class="row w-100">
        <div class="col-lg-4 col-sm-12 col-xs-6">
          <div class="row h-100 justify-content-center">
            <img class="img-fluid" src="image 6.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 offset-lg-6 col-5 offset-8 col-sm-4 offset-sm-9 d-flex align-items-center">
          <div class="row h-100 w-100 align-items-center justify-content-center bg_color4">
            <div class="col-lg-2 offset-lg-2 col-2 size_33 d-flex justify-content-center align-items-center bg-info">
              <img src="user.png" alt="" class="size_33 bg-danger">
            </div>
            <div class="col-lg-7 col-8 height_33px ps-2 d-flex align-items-center justify-content-center bg-danger" style="width: 107px;">
              <!-- <?php echo "untuk nama dari user" ?> -->
              hhhj

              <!-- Ini nanti ada pakai javascript -->
              <!-- <a href="">untuk logut</a> -->
              <!-- <a href="">untuk ke halaman profile</a> -->
            </div>
          </div>

          <!-- <div class="row w-100 row-cols-lg-2 ps-lg-1 row-cols-sm-2 row-cols-2 gx-0 bg_color3">
                    <div class="col ms-lg-5 size_33 d-flex align-items-center bg-warning">
                      <img class="img-fluid size_33" src="user.png" alt="">
                    </div>
                    <div class="col height_33px d-flex align-items-center justify-content-center bg-danger" style="width: 96px;">
                      
                    </div>
                  </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- header -->

  <!-- content -->
  <div class="container-fluid">
    <div class="container-xxl">
      <div class="container">
        <div class="mt-2">
          <a href=""></a><img class="bg_color1" src="dasboard-logo.png" alt=""></a>
        </div>
        <div class="row mt-2 mb-4">
          <div class="col-12 bg_color3">
            <div class="row py-2">
              <div class="col-1" style="width: 75px;">
                <img class="" src="book.png" alt="">
              </div>
              <div class="col-11 gx-0 d-flex align-items-center">
                <h3>Daftar Mata Pelajaran</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
          <!-- LAKUKAN PERULANGAN -->
          <!-- <?php //for() ?> -->
            <div class="col">
              <div class="card h-100">
                <div class="bg-warning ">
                  <img src="mapel-sub.png" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <!-- <h5 class="card-title"><?php ?></h5> -->
                  <div class="row">
                    <div class="col-6">
                      <!-- <p class="card-title fs-5"><?php ?></p> -->
                      <p class="card-title fs-5">IPA</p>
                    </div>
                    <div class="col-6 text-end">
                      <img src="there_dot.png" alt="">
                    </div>
                  </div>
                  <!-- <h2 class="card-text"><?php ?></h2> -->
                  <h2 class="card-text">FISIKA</h2>
                </div>
              </div>
            </div>

            <!-- CONTOH JIKA ADA 2 MAPEL -->
            <div class="col">
              <div class="card h-100">
                <div class="bg-warning ">
                  <img src="mapel-sub.png" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <!-- <h5 class="card-title"><?php ?></h5> -->
                  <div class="row">
                    <div class="col-6">
                      <!-- <p class="card-title fs-5"><?php ?></p> -->
                      <p class="card-title fs-5">IPA</p>
                    </div>
                    <div class="col-6 text-end">
                      <img src="there_dot.png" alt="">
                    </div>
                  </div>
                  <!-- <h2 class="card-text"><?php ?></h2> -->
                  <h2 class="card-text">FISIKA</h2>
                </div>
              </div>
            </div>
          <!-- <?php ?> -->
        </div>
      </div>
    </div>
  </div>
  <!-- content -->

  <!-- footer -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 py-3 bg_color3">
        <div class="container text_footer">
          <p>Copyright © 2023 by Elearning SMAN 1 KASIHAN</p>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
</body>

</html>