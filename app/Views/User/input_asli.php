<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $title; ?></title>
    <style>
        body {
            background: url(https://cdn.pixabay.com/photo/2017/01/31/13/40/dark-2024127_960_720.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx-auto" style="margin-top: 100px; margin-bottom: 50px;">
                <div>
                    <center><img src="\img\logo.png" class="rounded-circle img-thumbnail mt-3 mb-3" width="300px;""></center>
                    <h1 class=" display-3 text-center text-white">Atha Computer</h1>
                </div>
                <div class="card bg-secondary mt-3 col-sm-12 col-md-12 col-lg-12">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <a href="#" class="text-white mt-3" style="text-decoration: none; font-size: 30px; font-weight: bold;">Form Absensi Prakerin</a>
                            </div>
                            <div class="col-sm-6 col-md-7">
                                <div class="col mx-auto mt-1">
                                    <form action="/user/simpanUser" method="POST">
                                        <?= csrf_field(); ?>
                                        <div class="row mx-auto">
                                            <?php date_default_timezone_set('Asia/Jakarta'); ?>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <input type="date" class="form-control mb-3" name="tgl" value="<?= date('Y-m-d'); ?>" readonly required>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <input type="time" class="form-control" name="jam" value="<?= date('H:i:s'); ?>" readonly required>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="id" class="form-label text-white">ID SISWA</label>
                                <input type="text" class="form-control" id="id" name="id" required placeholder="Masukan Id Siswa" minlength="6" maxlength="6" autocomplete="off" autofocus>
                            </div>
                            <div class="col-sm">
                                <label for="id" class="form-label text-white">NAMA SISWA</label>
                                <input type="text" class="form-control" id="id" name="nama" required placeholder="Masukan Nama Siswa" autocomplete="off">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm mx-auto">
                                <label for="id" class="form-label text-white">KETERANGAN</label>
                                <select class="form-control" name="ket" required>
                                    <option selected disabled>Pilih Salah Satu</option>
                                    <option>Hadir</option>
                                    <option>Sakit</option>
                                    <option>Ijin</option>
                                    <option>Alpa</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 mx-auto mb-3">
                                <button type="submit" class="btn btn-primary form-control mt-3 mb-3"><b>LOGIN</b></button>
                            </div>
                            <div class="col-sm-4 mx-auto mb-3">
                                <a href="/login" class="btn btn-warning form-control mt-3 mb-3"><b>ADMIN</b></a>
                            </div>
                        </div>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success mb-3" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger mb-3" role="alert">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        </form>
                    </div>
                    <div class="card-footer text-white">
                        <p class="text-center">&copy; 2021 All Right Reserved by <a href="https://www.instagram.com/fajaraji_kusuma/" class="text-white">F - HOME</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>