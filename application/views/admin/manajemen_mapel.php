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
        <div class="container-fluid pt-3 p-0 pb-5 bg_color3" id="back">
            <div class="container-xxl">
                <div class="container p-0">
                    <div class="dropdown">
                        <button class="container_menu_admin bg_color1 text-light" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="img_menu_admin">
                                <img src="<?php echo base_url(); ?>asset/menu_admin.png" alt="">
                            </div>
                            <div class="d-flex justify-content-center align-items-center w-100 text_menu_admin">Menu</div>
                        </button>
                        <ul class="dropdown-menu bg_color1" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item text-light" href="<?php echo base_url()?>admin">Dashboard</a></li>
                            <li><a class="dropdown-item text-light" href="<?php echo base_url()?>admin/manajemen_kelas">Manajemen Kelas</a></li>
                            <li><a class="dropdown-item text-light" href="<?php echo base_url()?>admin/manajemen_mapel">Mata Pelajaran</a></li>
                            <li><a class="dropdown-item text-light" href="<?php echo base_url()?>admin/manajemen_tugas">Manajemen Tugas/Quiz</a></li>
                        </ul>
                    </div>

                    <div class="row text-center text-lg-start title_manajemen_kelas">
                        <h1>Manajemen Mata Pelajaran</h1>
                    </div>

                    <div class="bg-white p-3">
                        <a href="<?php echo base_url()?>admin/tambah_manajemen_mapel">
                        <div class="btn btn-primary btn_tambah_data">
                            Tambah Data
                        </div>
                        </a>

                        <div class="table-responsive text-nowrap">
                        <table class="table table-striped table-bordered border-dark align-middle">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Mata Pelajaran</th>
                                <th>Mata Pelajaran</th>
								<th>Guru Mata Pelajaran</th>
                                <th>Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php foreach ($data_mapel as $data) : ?>
                            <tr>
                                <td>1</td>
                                <td> <?php echo $data->kode_mapel?></td>
                                <td> <?php echo $data->nama_mapel?></td>
								<td> <?php echo $data->guru_mapel?></td>
                                <td>
                                <a class="" href="<?php echo base_url()?>admin/edit_manajemen_mapel">
                                    <div class="btn btn-warning p-1 px-2 me-1 text-white">
                                    Edit
                                    </div>
                                </a>
                                <a class="" href="<?php echo base_url()?>admin/hapus_matapelajaran/<?php echo $data->id_mapel; ?>">
                                    <div class="btn btn-danger p-1 px-2">
                                    Hapus
                                    </div>
                                </a>
                                </td>
                            </tr>
							<?php endforeach; ?>
                            </tbody>
                        </table>
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
    </body>

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

</html>
