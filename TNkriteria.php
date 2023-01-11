<div class="content-tambahDkriteria">
<h2>TAMBAH NILAI ANGKET</h2>
    <form action="" method="POST">
        <div class="form-group row jarak-hubungi">
            <?php 
                        $query=mysqli_query($conn, "SELECT * FROM nkriteria");
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
                                <label class='col-sm-2 col-form-label'>Nilai Angket</label>
                                <div class='col-sm-10'>
                                <input type='text' class='form-control' name='normalisasi' id='normalisasi' value='$normalisasi' readonly>
                                </div>
                                ";?>
        </div>
        <div class="form-group jarak-hubungi">
        <center><button class="btn btn-success" name="tambah"><i class="fas fa-plus"></i>&nbsp;Tambah Nilai Angket</button></center>
        </div>
    </form>
    <br/><br/>
    <?php 
        if (isset($_POST['tambah'])) {
            $conn->query("UPDATE nkriteria SET normalisasi='$_POST[normalisasi]' WHERE id_kriteria='$_GET[id]'");
            echo "<div class='alert alert-info'>Data Sudah Ditambahkan!</div>";
            echo "<center><meta style='text-align:center;' http-equiv='refresh' content='1;url=index.php?page=Nkriteria'></center>";
        }
    ?>
</div>