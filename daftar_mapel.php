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
      <div class="row bg-warning">
        <div class="col-lg-4 col-md-6 col-sm-8 col-8 bg-info">
          <div class="row h-100 justify-content-center align-content-center">
            <img class="img-fluid img_navbar_mobile" src="image 6.png" alt="">
          </div>
        </div>

        <div class="d-flex col-lg-2 offset-lg-6 col-md-6 col-sm-4 col-4 p-0 justify-content-end align-items-center bg-success">
          <!-- Nama Profil -->
          <div class="container_profil_daftar_mapel bg-warning" id="btn_logout">
            <div class="d-flex align-items-center profil_daftar_mapel w-100 bg-light">
              <div class="img_profil_daftar_mapel bg-danger">
                <img src="user.png" alt="">
              </div>
              <div class="d-flex justify-content-center align-items-center text_profil_daftar_mapel w-100 bg-warning" >
                Munandar
              </div>
            </div>
          </div>
          <!-- Nama Profil -->

          <!-- Tombol detail profil dan logout -->
          <div class="container_profil_daftar_mapel bg-warning d-none" id="btn_show">
            <div class="profil_daftar_mapel_mobile bg-white">
              <div class="d-flex justify-content-center align-items-center profil_user bg-info">
                <a href="">Profil</a>
              </div>
              <div class="d-flex justify-content-center align-items-center logout_user bg-danger">
                <a href="">Logout</a>
              </div>
            </div>
          </div>
          <!-- Tombol detail profil dan logout -->

        </div>
      </div>
    </div>
  </div>
  <!-- header -->

  <!-- content -->
  <div class="container-fluid bg_color3" id="back">
    <div class="container-xxl">
      <div class="container">
        <div class="pt-2">
          <a href="daftar_mapel.php"><img class="img_dashboard_user bg_color1" src="dasboard-logo.png" alt=""></a>
        </div>
        <div class="row mt-2 mb-lg-4 mb-md-4 mb-3">
          <div class="col-12 bg_color4">
            <div class="d-flex align-items-center py-2">
              <div class="d-flex align-items-center container_img_book_user">
                <img class="img_book_user" src="book.png" alt="">
              </div>
              <div class="d-flex align-items-center text_mapel_user w-100">
                Daftar Mata Pelajaran
              </div>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pb-4">
          <!-- LAKUKAN PERULANGAN -->
          <!-- <?php //for() ?> -->
          <div class="col">
            <div class="card card_daftar_mapel">
              <div class="d-flex justify-content-center align-items-center card-img-top bg-warning">
                <img src="mapel-sub.png" class="card-img-top img_card_daftar_mapel" alt="...">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <!-- <p class="card-title fs-5"><?php ?></p> -->
                    <p class="card_title">IPA</p>
                  </div>
                  <div class="col-6 text-end">
                    <img src="there_dot.png" alt="">
                  </div>
                </div>
                <!-- <h2 class="card-text"><?php ?></h2> -->
                <h2 class="card_text">FISIKA</h2>
              </div>
            </div>
          </div>

          <!-- CONTOH JIKA ADA 2 MAPEL -->
          <div class="col">
            <div class="card card_daftar_mapel">
              <div class="d-flex justify-content-center align-items-center card-img-top bg-warning">
                <img src="mapel-sub.png" class="card-img-top img_card_daftar_mapel" alt="...">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <!-- <p class="card-title fs-5"><?php ?></p> -->
                    <p class="card_title">IPA</p>
                  </div>
                  <div class="col-6 text-end">
                    <img src="there_dot.png" alt="">
                  </div>
                </div>
                <!-- <h2 class="card-text"><?php ?></h2> -->
                <h2 class="card_text">FISIKA</h2>
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
    

    btn.addEventListener('click',  () => {
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