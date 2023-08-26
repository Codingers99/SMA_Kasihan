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
    <div class="container-fluid bg_color3" id="back">
        <div class="container-xxl">
            <div class="container">
                <div class="menu pt-2">
                    <a href="<?php echo base_url(); ?>elearning/mapel"><img class="img_dashboard_user" src="<?php echo base_url(); ?>asset/dasboard-logo.png" alt=""></a>
                    <a href="<?php echo base_url(); ?>elearning/list_mapel"><img class="img_list_mapel" src="<?php echo base_url(); ?>asset/book.png" alt=""></a>
                    <div class="d-flex align-items-center w-100">
                        <form action="" class="search_form w-100">
                            <input class="search_input" type="search" placeholder="Search">
                            <button class="search_button btn btn-light">Search</button>
                        </form>
                </div>
                </div>
                <div class="row mt-2 mb-lg-4 mb-md-4 mb-3">
                    <div class="col-12 bg_color4">
                        <div class="d-flex align-items-center py-2">
                            <div class="d-flex align-items-center container_img_book_user">
                                <img class="img_book_user" src="<?php echo base_url(); ?>asset/book.png" alt="">
                            </div>
                            <div class="d-flex align-items-center text_mapel_user w-100">
                                List Mata Pelajaran
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 g-4 pb-4 container_card_daftar_mapel">
                <!-- LAKUKAN PERULANGAN -->
                <!-- <?php //for() ?> -->
                    <div class="card p-0 container_card_list_mapel">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-content-center align-items-center img_card_list_mapel bg-warning">
                                <img src="<?php echo base_url(); ?>asset/mapel-sub.png" class="img_card_daftar_mapel img-fluid" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title ct_mobile">Judul Mata Pelajaran</h5>
                                    <div class="d-flex box_title bg_color3">
                                        <div class="box_ket">
                                        Pengajar :
                                        </div>
                                        <div class="box_name">
                                        Dr.Stein
                                        </div>
                                    </div>
                                    <p class="card-text card_desc_list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod incidunt quas
                                        distinctio molestias alias quae eveniet, nesciunt necessitatibus odit! Quaerat, soluta quia similique aut
                                        accusamus repellendus commodi. Optio, saepe veritatis.</p>
                                    <form class="daftar_list" action="">
                                        <input type="text">
                                        <p class="card-text card_key_list"><small class="text-muted">Enrolment key</small></p>
                                        <div class="text-end">
                                            <button class="btn btn-secondary">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CONTOH JIKA ADA 2 MAPEL -->
                    <div class="card p-0 container_card_list_mapel">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-content-center align-items-center img_card_list_mapel bg-warning">
                                <img src="<?php echo base_url(); ?>asset/mapel-sub.png" class="img_card_daftar_mapel img-fluid" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title ct_mobile">Judul Mata Pelajaran</h5>
                                    <div class="d-flex box_title bg_color3">
                                        <div class="box_ket">
                                        Pengajar :
                                        </div>
                                        <div class="box_name">
                                        Dr.Stein
                                        </div>
                                    </div>
                                    <p class="card-text card_desc_list">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod incidunt quas
                                        distinctio molestias alias quae eveniet, nesciunt necessitatibus odit! Quaerat, soluta quia similique aut
                                        accusamus repellendus commodi. Optio, saepe veritatis.</p>
                                    <form class="daftar_list" action="">
                                        <input type="text">
                                        <p class="card-text card_key_list"><small class="text-muted">Enrolment key</small></p>
                                        <div class="text-end">
                                            <button class="btn btn-secondary">Daftar</button>
                                        </div>
                                    </form>
                                </div>
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
