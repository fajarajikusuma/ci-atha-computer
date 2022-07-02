<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    html,
    body {
        color: #718096 !important;
        font-size: 14px !important;
        font-family: 'Poppins', sans-serif;
        background-color: #edf2f7;
        scroll-behavior: smooth;
    }

    .transition {
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    .topbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 75px;
        background-image: linear-gradient(to right, #4c51bf, #4299e1);
        margin-left: 0;
        transition: all .3s;
        z-index: 9997;
    }

    .topbar .bars {
        float: left;
        display: flex;
        align-items: center;
        height: 75px;
        margin-left: 10px;
    }

    .topbar .bars button {
        font-size: 28px;
        color: #e2e8f0;
        box-shadow: none;
        display: block;
    }

    .topbar .bars button:hover {
        color: #fff;
    }

    .topbar .menu {
        float: right;
        display: flex;
        align-items: center;
        height: 75px;
        padding: 0 10px;
    }

    .topbar .menu ul {
        padding: 0;
        margin: 0;
    }

    .topbar .menu ul li {
        display: inline-block;
        margin: 8px 10px 0 10px;
    }

    .topbar .menu ul li a {
        text-decoration: none;
        color: #e2e8f0;
    }

    .topbar .menu ul li a i {
        font-size: 22px;
    }

    .topbar .menu ul li a:hover,
    .topbar .menu ul li .dropdown-toggle:hover {
        color: #fff;
    }

    .topbar .menu ul li .dropdown-toggle {
        color: #e2e8f0;
        cursor: pointer;
    }

    .topbar .menu ul li .dropdown-menu {
        margin-top: 25px;
        margin-right: 5px;
        border: 0;
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
    }

    .topbar .menu ul li .dropdown-menu a {
        color: #718096;
        font-weight: 400;
    }

    .topbar .menu ul li img {
        width: 40px;
        height: 40px;
        margin-top: -8px;
    }

    .topbar .menu ul li a .notif {
        position: absolute;
        margin-top: -10px;
        margin-left: -10px;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: -300px;
        bottom: 0;
        width: 300px;
        background-color: #fff;
        box-shadow: 0 0 50px rgba(0, 0, 0, .1);
        z-index: 9999;
    }

    .sidebar .logo {
        position: fixed;
        width: 275px;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
    }

    .topbar .logo a {
        text-decoration: none;
    }

    .sidebar .sidebar-items {
        padding: 75px 30px;
        height: 100%;
        overflow: auto;
    }

    .sidebar .sidebar-items .menu {
        color: #a0aec0;
        font-size: 12.5px;
        font-weight: 500;
        margin-top: 30px;
        margin-bottom: 5px;
        text-transform: uppercase;
    }

    .sidebar .sidebar-items ul {
        padding: 0;
        margin: 0;
    }

    .sidebar .sidebar-items ul li {
        display: block;
        position: relative;
    }

    .sidebar .sidebar-items ul li a {
        text-decoration: none;
        color: #4a5568;
        margin-left: 15px;
    }

    .sidebar .sidebar-items ul li a:hover,
    .sidebar .sidebar-items ul li a.active {
        color: #4299e1;
    }

    .sidebar .sidebar-items ul li a i {
        font-size: 22px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .sidebar .sidebar-items ul li a span {
        font-size: 16px;
        position: absolute;
        margin-top: 10px;
        margin-left: 15px;
    }

    .sidebar-show {
        left: 0;
    }

    .sidebar-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, .5);
        display: none;
        z-index: 9998;
    }

    .content {
        padding-top: 100px;
        padding-left: 0;
        min-height: 100vh;
    }

    .content h3 {
        margin-bottom: 20px;
    }

    .footer {
        left: 0;
        right: 0;
        height: 90px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: white;
        box-shadow: 0 0 100 rgba(0, 0, 0, .1);
        margin-left: 0;
    }

    .footer p {
        margin: 0;
    }

    .dashboard .card {
        border: 0;
        margin-bottom: 20px;
        box-shadow: 0 0 15px rgba(0, 0, 0, .05);
    }

    .dashboard .card .card-body {
        padding: 25px 20px;
    }

    .dashboard .card i {
        font-size: 35px;
        padding: 5px;
        border-radius: 5px;
    }

    .dashboard .card p {
        margin-bottom: 5px;
    }

    .dashboard .card h5 {
        font-weight: 600;
    }

    .dashboard .card .col-8 {
        text-align: right;
    }

    @media (min-width: 568px) {
        .topbar {
            margin-left: 300px;
        }

        .sidebar {
            left: 0;
        }

        .content {
            padding-left: 300px;
        }

        .footer {
            margin-left: 300px;
        }

        .topbar .bars button {
            display: none;
        }

        .sidebar-overlay {
            display: none !important;
        }
    }
</style>

<body>

    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="las la-bars"></i>
            </button>
        </div>
        <!-- Navbar -->
        <div class="menu">
            <ul>
                <!-- <li>
                    <a href="#" class="transition">
                        <i class="las la-bell"></i>
                        <span class="badge badge-danger notif">5</span>
                    </a>
                </li>
                <li>
                    <a href="settings.html" class="transition">
                        <i class="las la-sliders-h"></i>
                    </a>
                </li> -->
                <li>
                    <div class="dropdown">
                        <div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            HI, <?= session()->get('username'); ?>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownProfile">
                            <!-- <a class="dropdown-item" href="profile.html">My Profile</a>
                            <a class="dropdown-item" href="change-password.html">Change Password</a>
                            <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="<?= site_url('login/logout'); ?>">Sign Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar transition">
        <div class="logo">
            <a href="/user">
                <p style="font-size: 24px; font-weight: bold; margin-bottom: 0;">Atha Computer</p>
            </a>
        </div>
        <!-- Sidebar Menu -->
        <div class="sidebar-items">
            <ul>
                <p class="menu">Presensi</p>
                <li>
                    <a href="/data" class="transition">
                        <i class="las la-home"></i>
                        <span>Daftar Absensi</span>
                    </a>
                </li>
                <li>
                    <a href="/data/input" class="transition">
                        <i class="lab la-chromecast"></i>
                        <span>Input Absensi</span>
                    </a>
                </li>
                <p class="menu">Laporan</p>
                <li>
                    <a href="/data/cetak" class="transition">
                        <i class="las la-box"></i>
                        <span>Cetak Laporan</span>
                    </a>
                </li>
                <!-- <p class="menu">Forms & Table</p>
                <li>
                    <a href="forms.html" class="transition">
                        <i class="las la-file-alt"></i>
                        <span>Forms</span>
                    </a>
                </li>
                <li>
                    <a href="bootstrap-table.html" class="transition">
                        <i class="las la-table"></i>
                        <span>Bootstrap table</span>
                    </a>
                </li>
                <p class="menu">Chart & Maps</p>
                <li>
                    <a href="chart.html" class="transition">
                        <i class="las la-chart-line"></i>
                        <span>Chart</span>
                    </a>
                </li>
                <li>
                    <a href="maps.html" class="transition">
                        <i class="las la-map"></i>
                        <span>Maps</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>

    <div class="sidebar-overlay"></div>

    <!-- Content -->
    <div class="content transition">
        <div class="container-fluid dashboard">
            <h3><?= $title; ?></h3>
            <?= $this->renderSection('content'); ?>
        </div>
    </div>

    <div class="footer transition">
        <p>&copy; 2021 All Right Reserved by <a href="AhliKode.com">AhliKode</a></p>
    </div>
    <script>
        $(document).ready(function() {
            $("#sidebar-toggle, .sidebar-overlay").click(function() {
                $(".sidebar").toggleClass("sidebar-show");
                $(".sidebar-overlay").toggleClass("d-block");
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>