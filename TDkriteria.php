
<div class="content-tambahDkriteria">
<h2>TAMBAH DATA KRITERIA</h2>
    <form action="" method="POST">
    <br/>
        <div class="alert alert-info">
            Pastikan untuk mengisi ID Kriteria harus sesuai setelah data sebelumnya,<br/>
            Contoh : <i>Jika data sebelumnya memiliki ID 10 maka data selanjutnya harus disi ID 11,<br/>
            &nbsp;&nbsp;jangan pernah mengisi ID Kriteria yang sudah ada, data tidak akan tampil,</i>
        </div>
        <div class="form-group row jarak-hubungi">
            <label class="col-sm-2 col-form-label">ID Kriteria</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Kriteria">
            </div>
            <br/><br/><br/>
            <label class="col-sm-2 col-form-label">Nama Kriteria</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kriteria">
            </div>
        </div>
        <div class="form-group jarak-hubungi">
        <center><button class="btn btn-success" name="tambah"><i class="fas fa-plus"></i>&nbsp;Tambahkan Data Kriteria</button></center>
        </div>
    </form>
    <br/><br/>
    <?php 
        if (isset($_POST['tambah'])) {
            $conn->query("INSERT INTO dkriteria
            (id_kriteria,nama_kriteria) VALUES ('$_POST[id]','$_POST[nama]')");
            $conn->query("INSERT INTO nkriteria
            (id_kriteria,id_kriteria2) VALUES ('$_POST[id]','$_POST[id]')");
            echo "<div class='alert alert-info'>Data Sudah Ditambahkan!</div>";
            echo "<center><meta style='text-align:center;' http-equiv='refresh' content='1;url=index.php?page=Dkriteria'></center>";
        }
    ?>
</div>
