<div class="content-tambahDkriteria">
<h2>UBAH DATA KRITERIA</h2>
<?php 
$ambil_data = $conn->query("SELECT * FROM dkriteria WHERE id_kriteria='$_GET[id]'");
$hasil = $ambil_data->fetch_assoc();
?>
    <form action="" method="POST">
        <div class="form-group row jarak-hubungi">
            <label class="col-sm-2 col-form-label">Nama Kriteria</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kriteria">
            </div>
        </div>
        <div class="form-group jarak-hubungi">
        <center><button class="btn btn-warning" name="ubah"><i class="fas fa-pencil-alt"></i>&nbsp;Ubah Data Kriteria</button></center>
        </div>
    </form>
    <br/><br/>
    <?php 
        if (isset($_POST['ubah'])) {
            $conn->query("UPDATE dkriteria SET nama_kriteria='$_POST[nama]' WHERE id_kriteria='$_GET[id]'");

            echo "<div class='alert alert-info'>Data Sudah Diubah!</div>";
            echo "<center><meta style='text-align:center;' http-equiv='refresh' content='1;url=index.php?page=Dkriteria'></center>";
        }
    ?>
</div>