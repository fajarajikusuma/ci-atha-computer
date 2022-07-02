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
            background: url(https://img.freepik.com/free-vector/sunset-sunrise-ocean-nature-landscape_33099-2244.jpg?size=626&ext=jpg) no-repeat center center fixed;
            /* background-color: blue; */
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
            <div class="col-6 mx-auto" style="margin-top: 100px;">
                <div>
                    <center><img src="\img\logo.png" class="rounded-circle img-thumbnail mt-3 mb-3" width="300px;""></center>
                    <h1 class=" display-3 text-center text-white mb-5">Atha Computer</h1>
                </div>
                <div class="card bg-secondary">
                    <div class="card-header">
                        <h3 class="text-white text-center">Silahkan Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="mt-3 mb-3">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label text-white">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Masukan Username..." name="username" value="<?= session()->getFlashdata('username'); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label text-white">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Masukan Password..." name="password">
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                        <input type="submit" class="btn btn-primary form-control" name="login" value="LOGIN">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <a href="/user" class="btn btn-info form-control">KEMBALI</a>
                                    </div>
                                </div>
                            </form>
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