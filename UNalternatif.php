<div class="content-tambahDkriteria">
<h2>UBAH NILAI ALTERNATIF</h2>
<?php 
$ambil_data = $conn->query("SELECT * FROM dalternatif WHERE id_alternatif='$_GET[id]'");
$hasil = $ambil_data->fetch_assoc();
?>
    <form action="" method="POST">
        <div class="form-group row jarak-hubungi">
            <label class="col-sm-2 col-form-label jarak-hubungi">Kriteria 1</label>
            <div class="col-sm-10 jarak-hubungi">
            <input type="text" class="form-control" id="id1" name="id1" value="<?php echo $hasil['C1']; ?>">
            </div>
            <label class="col-sm-2 col-form-label jarak-hubungi">Kriteria 2</label>
            <div class="col-sm-10 jarak-hubungi">
            <input type="text" class="form-control" id="id2" name="id2" value="<?php echo $hasil['C2']; ?>">
            </div>
            <label class="col-sm-2 col-form-label jarak-hubungi">Kriteria 3</label>
            <div class="col-sm-10 jarak-hubungi">
            <input type="text" class="form-control" id="id3" name="id3" value="<?php echo $hasil['C3']; ?>">
            </div>
            <label class="col-sm-2 col-form-label jarak-hubungi">Kriteria 4</label>
            <div class="col-sm-10 jarak-hubungi">
            <input type="text" class="form-control" id="id4" name="id4" value="<?php echo $hasil['C4']; ?>">
            </div>
            <label class="col-sm-2 col-form-label jarak-hubungi">Kriteria 5</label>
            <div class="col-sm-10 jarak-hubungi">
            <input type="text" class="form-control" id="id5" name="id5" value="<?php echo $hasil['C5']; ?>">
            </div>
        </div>
        <div class="form-group jarak-hubungi">
        <center><button class="btn btn-warning" name="ubah"><i class="fas fa-pencil-alt"></i>&nbsp;Ubah Data Alternatif</button></center>
        </div>
    </form>
    <br/><br/>
    <?php 
        if (isset($_POST['ubah'])) {
            $conn->query("UPDATE dalternatif SET C1='$_POST[id1]', C2='$_POST[id2]', C3='$_POST[id3]', C4='$_POST[id4]', C5='$_POST[id5]' WHERE id_alternatif='$_GET[id]'");

            echo "<div class='alert alert-info'>Data Sudah Diubah!</div>";
            echo "<center><meta style='text-align:center;' http-equiv='refresh' content='1;url=index.php?page=NAlternatif'></center>";
        }
    ?>
</div>