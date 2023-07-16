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
    <style>

    </style>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- header -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 d-flex justify-content-center py-3 bg_color1">
            <img class="img-fluid" src="logo-daftar.png" alt="">
        </div>
        </div>
    </div>
    <!-- header -->

    <!-- content -->
    <div class="container-fluid py-3 bg_color3">
        <div class="text-center my-3">
        <h2>Pendaftaran Peserta Baru</h2>
        </div>
        <div class="container d-flex justify-content-center">
        <form>
            <div class="row container_daftar p-2 bg_color1 text-light">
                <!-- NIS/NISN -->
                <div class="col-4 pt-2 my-1 mt-3">
                    <label for="nisn" class="form-label">NIS/NISN</label>
                </div>
                <div class="col-8 my-1 mt-3">
                    <input type="text" class="form-control" name="nisn">
                </div>
                <!-- NIS/NISN -->
            
                <!-- Jurusan -->
                <div class="col-4 pt-2 my-1">
                    <label for="jurusan" class="form-label">Jurusan</label>
                </div>
                <div class="col-8 my-1">
                    <input type="text" class="form-control" name="jurusan">
                </div>
                <!-- Jurusan -->
            
                <!-- Email -->
                <div class="col-4 pt-2 my-1">
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="col-8 my-1">
                    <input type="text" class="form-control" name="email">
                </div>
                <!-- Email -->
            
                <!-- Alamat dan Kode Pos -->
                <div class="col-4 pt-2">
                    <label for="alamat" class="form-label">Alamat dan Kode Pos</label>
                </div>
                <div class="col-8 my-1">
                    <input type="text" class="form-control" name="alamat">
                </div>
                <!-- Alamat dan Kode Pos -->
            
                <!-- Nama Lengkap -->
                <div class="col-4 pt-2 my-1">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                </div>
                <div class="col-8 my-1">
                    <input type="text" class="form-control" name="nama">
                </div>
                <!-- Nama Lengkap -->
            
                <!-- No Whatsapp -->
                <div class="col-4 pt-2 my-1 mb-3">
                    <label for="no_wa" class="form-label">No Whatsapp</label>
                </div>
                <div class="col-8 my-1 mb-3">
                    <input type="text" class="form-control" name="no_wa">
                </div>
                <!-- No Whatsapp -->
            </div>
        
            <!-- Button -->
            <div class="row container_daftar mt-3 mb-5">
                <div class="row">
                    <div class="col-6 offset-4">
                        <button type="submit" class="btn bg_color4 w-100">Buat Keanggotaan</button>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn bg_color4">Batal</button>
                    </div>
                </div>
            </div>
            <!-- Button -->
        </form>
        </div>
    </div>
    <!-- content -->

    <!-- footer -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-12 py-3 bg_color3">
            <div class="container">
            <p>Copyright © 2023 by Elearning SMAN 1 KASIHAN</p>
            </div>
        </div>
        </div>
    </div>
    <!-- footer -->
</body>

</html>