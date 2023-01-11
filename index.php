<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
} 
require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK - Aljabar Linier</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <input type="checkbox" id="check">
    <!-- Header Start -->
    <header>
    <label for="check">
            <i class="fas fa-bars" id="sidebar_button"></i>
        </label>
        <div class="area_kiri">
            <h3>SPK</h3>
        </div>
        <div class="area_kanan">
            <div class="dropdown">
            <button class="dropdown-toggle button-img" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/avatarright.png">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <label><img src="img/avatarright.png" alt="">Admin
                <span class="email-profile">admin1@gmail.com</span></label>
                <hr>
                <?php $ambil = $conn->query("SELECT * FROM admin"); ?>
                <?php while($pecah = $ambil->fetch_assoc()) { ?>
                <li><a class="dropdown-item" href="index.php?page=profile&id=<?php echo $pecah['id_admin']; ?>">Profile</a></li>
                <?php } ?>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            </div> 
        </div>
        <div class="online">
            <span class="on"></span>
            <span class="on1">Online</span>
        </div>
    </header>
    <!-- Header End -->

    <!-- Sidebar Start -->
    <div class="sidebar">
            <div class="kiri">
                <center><img src="img/avatar_right.png" class="profile_image" alt=""></center>
            </div>
            <br/> 
            <div class="kanan">
                <h4>Admin</h4>
            </div>
            <p class="lets">suprise me</p>
            <h6 class="suprise">Admin</h6>
            <a href="index.php"><i class="fas fa-tachometer-alt text-left"></i><span>Dashboard</span></a>
            <a href="index.php?page=Dkriteria"><i class="fas fa-bars"></i><span>Daftar Kriteria</span></a>
            <a href="index.php?page=Nkriteria"><i class="fas fa-file-signature"></i><span>Nilai Kriteria</span></a>
            <a href="index.php?page=DAlternatif"><i class="fas fa-university"></i><span>Daftar Alternatif</span></a>
            <a href="index.php?page=NAlternatif"><i class="fas fa-cogs"></i><span>Nilai Alternatif</span></a>
            <a href="index.php?page=goals"><i class="fas fa-bullseye"></i><span>Goals</span></a>
        <div class ="button-logout">
            <a href="logout.php"><i class="fas fa-power-off"></i>LOGOUT</a>
        </div>
    </div>
    <!-- Sidebar End -->

    <!-- Main Content Star -->
    <div class="content">
    <?php 
    
    if (isset($_GET['page'])){
        if ($_GET['page']=="Dkriteria") {
            include "daftar_kriteria.php";
        }
        elseif ($_GET['page']=="tambahDkriteria") {
            include "TDkriteria.php";
        }
        elseif ($_GET['page']=="tambahNkriteria") {
            include "TNkriteria.php";
        }
        elseif ($_GET['page']=="ubahDkriteria") {
            include "UDkriteria.php";
        }
        elseif ($_GET['page']=="hapusDkriteria") {
            include "HDkriteria.php";
        }
        elseif ($_GET['page']=="Nkriteria") {
            include "nilai_kriteria.php";
        }
        elseif ($_GET['page']=="ubahNkriteria") {
            include "UNkriteria.php";
        }
        elseif ($_GET['page']=="DAlternatif") {
            include "daftar_alternatif.php";
        }
        elseif ($_GET['page']=="tambahDalternatif") {
            include "TDalternatif.php";
        }
        elseif ($_GET['page']=="NAlternatif") {
            include "nilai_alternatif.php";
        }
        elseif ($_GET['page']=="ubahNAlternatif") {
            include "UNalternatif.php";
        }
        elseif ($_GET['page']=="profile"){
            include "profile.php";
        }
        elseif ($_GET['page']=='editprofile') {
            include "editprofile.php";
        }
        elseif ($_GET['page']=='goals') {
            include "goals.php";
        }
    }
    else{
        include 'dashboard.php';
    }
    
    ?>
    </div>
    <!-- Main Content End -->

    <!-- Footer -->
    <div class="footer">
    <?php echo "Copyright © " . (int)date('Y') . " Tri Maulana Ardian (202051026). All Right Reserved."; ?>
    </div>
    <!-- Footer -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> 
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#datatables').DataTable();
        });
    </script>
</body>
</html>