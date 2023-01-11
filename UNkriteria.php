<div class="content-tambahDkriteria">
<h2>UBAH NILAI BOBOT KRITERIA</h2>
<?php 
$ambil_data = $conn->query("SELECT * FROM nkriteria WHERE id_kriteria='$_GET[id]'");
$hasil = $ambil_data->fetch_assoc();
?>
    <form action="" method="POST">
        <div class="form-group row jarak-hubungi">
            <label class="col-sm-3 col-form-label">Nilai Bobot Kriteria</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="bobot" name="bobot" placeholder="Nilai Bobot Kriteria">
            </div>
            <?php 
/*                        $query=mysqli_query($conn, "SELECT * FROM nkriteria");
                        while($data=mysqli_fetch_array($query)) {
                                $jumlah[]=$data['nilai'];
                        }
                                $jumlah_nilai=array_sum($jumlah);

                        $query1=mysqli_query($conn, "SELECT * FROM nkriteria WHERE id_kriteria='$_GET[id]'");
                        while($data1=mysqli_fetch_array($query1)) {
                                $n=$data1['nilai'];
                                $normalisasi=$n/$jumlah_nilai;
                        }
            echo "
                                <label class='col-sm-3 col-form-label'>Normalisasi</label>
                                <input type='text' class='form-control' name='normalisasi' id='normalisasi' value='$normalisasi' readonly>
                                ";*/?>
        </div>
        <div class="form-group jarak-hubungi">
        <center><button class="btn btn-warning" name="ubah"><i class="fas fa-pencil-alt"></i>&nbsp;Ubah Nilai Kriteria</button></center>
        </div>
    </form>
    <br/><br/>
    <?php 
        if (isset($_POST['ubah'])) {
            $conn->query("UPDATE nkriteria SET nilai='$_POST[bobot]' WHERE id_kriteria='$_GET[id]'");
            /*$conn->query("UPDATE nkriteria SET normalisasi='$_POST[normalisasi]' WHERE id_kriteria='$_GET[id]'");*/
            /*$conn->query("UPDATE nkriteria SET normalisasi='0' WHERE id_kriteria='$_GET[id]'");*/
            echo "<div class='alert alert-info'>Data Sudah Diubah!</div>";
            echo "<center><meta style='text-align:center;' http-equiv='refresh' content='1;url=index.php?page=Nkriteria'></center>";
        }
    ?>
</div>