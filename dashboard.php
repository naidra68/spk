<div class="content-dashboard">
    <div class="icon-kiri-dashboard">
        <i class="fas fa-tachometer-alt text-left"></i>
    </div>
    <div class="kanan-dashboard">
        <h2>DASHBOARD</h2>
        <p>Ini adalah halaman panel dashboard</p>
    </div>
    <div class="kanan-tabel-konten">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><span>Dashboard</span></li>
                </ol>
            </nav>
        </div>
</div>
<div class="panel-dashboard">
    <div class="kiri-panel-dashboard">
        <h3>Selamat Datang di Halaman Dashboard</h3>
        <p>Browse our fully designed UI toolkit! Browse our prebuilt app pages, 
        components, and utilites, and be sure to look at our full documentation!</p>
    </div>
    <div class="kanan-panel-dashboard">
        <img src="img/img1.jpg" alt="">
    </div>
</div>
<div class="panah-slide">
    <nav id="navbar-example2">
        <a href="#scroll"><i class="fas fa-arrow-down fa-lg"></i></a>
    </nav>
</div>
<div id="scroll" class="main-menu">
        <h2>MAIN MENU</h2>
</div>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <div class="daftar-kriteria">
        <h4>Daftar Kriteria</h4>
        <i class="fas fa-bars"></i>
        <br/><br/>
        <a href="index.php?page=Dkriteria">Klik Disini</a>
    </div>
    <div class="nilai-kriteria">
        <h4>Nilai Kriteria</h4>
        <i class="fas fa-file-signature"></i>
        <br/><br/>
        <a href="index.php?page=Nkriteria">Klik Disini</a>
    </div>
    <div class="daftar-alternatif">
        <h4>Daftar Alternatif</h4>
        <i class="fas fa-university"></i>
        <br/><br/>
        <a href="index.php?page=DAlternatif">Klik Disini</a>
    </div>
    <div class="nilai-alternatif">
        <h4>Nilai Alternatif</h4>
        <i class="fas fa-cogs"></i>
        <br/><br/>
        <a href="index.php?page=NAlternatif">Klik Disini</a>
    </div>
    <div class="goals">
        <h4>Goals</h4>
        <i class="fas fa-bullseye"></i>
        <br/><br/>
        <a href="index.php?page=goals">Klik Disini</a>
    </div>
</div>
<div class="contact-us">
    <h2>HUBUNGI KAMI</h2>
    <div class="container jarak-hubungi">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="depan" id="depan" placeholder="Nama Depan">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="belakang" id="belakang" placeholder="Nama Belakang">
                </div>
            </div>
            <div class="form-group jarak-hubungi">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group jarak-hubungi">
                <textarea class="form-control" name="keterangan" id="keterangan" rows="4" placeholder="Tulis pesan dan saran"></textarea>
            </div>
            <center><button class="btn btn-outline-primary btn-lg btn-block jarak-button" name="kirim">Kirim Sekarang</button></center>
        </form>
        <?php 
            require "function.php";
        ?>
    </div>
</div>