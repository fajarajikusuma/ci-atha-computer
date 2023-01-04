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
            background: url(https://media.istockphoto.com/vectors/blue-sky-with-white-clouds-background-border-of-clouds-simple-cartoon-vector-id1138179218?b=1&k=20&m=1138179218&s=170667a&w=0&h=maFDOrzJMxDJ7rvvKW5ddHcHdk_Q5sTisbWl_npHI-4=) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .btn {
            border-radius: 50px;
        }

        .card {
            border-radius: 30px;
        }

        .alert {
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="row">
                        <div class="col-lg-1 col-md-2 col-sm-6">
                            <img src="\img\logo.png" style="padding: 10px 20px; width: 100px;">
                        </div>
                        <div class="col-lg-11 col-md-10 col-sm-6">
                            <h3 style="font-family: cursive; padding: 20px 20px;">Atha Computer Pemalang</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-2 mb-5">
                    <div class="row">
                        <div class="col-sm-12 col-md-7 col-lg-5">
                            <div class="container-fluid mt-3 mb-3">
                                <a href="#" class="mt-3" style="text-decoration: none; font-size: 30px; font-weight: bold;">Form Absensi Prakerin</a>
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
                            <div class="container-fluid">
                                <hr>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="id" class="form-label">ID SISWA</label>
                                        <input type="text" class="form-control" id="id" name="id" required placeholder="Masukan Id Siswa" minlength=6 maxlength=6 autocomplete="off" autofocus title="CONTOH ID SISWA YANG BENAR ADALAH 19-673" pattern="^\d{2}-\d{3}$">
                                    </div>
                                    <div class="col-sm">
                                        <label for="id" class="form-label">NAMA SISWA</label>
                                        <input type="text" class="form-control" id="id" name="nama" required placeholder="Masukan Nama Siswa" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm mx-auto">
                                        <label for="id" class="form-label">KETERANGAN</label>
                                        <!-- create select with 4 option required -->
                                        <select class="form-select" name="ket" required>
                                            <option value="" selected disabled>Pilih Keterangan</option>
                                            <option value="Hadir">Hadir</option>
                                            <option value="Sakit">Sakit</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Alfa">Alfa</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 mx-auto mb-3">
                                        <button type="submit" class="btn btn-outline-primary form-control mt-3 mb-3"><b>LOGIN</b></button>
                                    </div>
                                    <div class="col-sm-4 mx-auto mb-3">
                                        <a href="/login" class="btn btn-outline-warning form-control mt-3 mb-3"><b>ADMIN</b></a>
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
                            </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-7">
                            <div class="container-fluid mt-3 mb-3">
                                <div class="table-responsive">
                                    <div class="overflow-auto" style="width: 690px; height: 400px;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>ID</th>
                                                    <th>NAMA</th>
                                                    <th>TANGGAL</th>
                                                    <th>JAM</th>
                                                    <th>KETERANGAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($pkl as $d) { ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $d['id_siswa'] ?></td>
                                                        <td><?= $d['nama_siswa'] ?></td>
                                                        <td><?= $d['tgl'] ?></td>
                                                        <td><?= $d['jam'] ?></td>
                                                        <td><?= $d['ket'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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