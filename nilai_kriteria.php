<div class="content-dashboard">
    <div class="icon-kiri-dashboard">
        <i class="fas fa-file-signature text-left"></i>
    </div>
    <div class="kanan-dashboard">
        <h2>NILAI KRITERIA</h2>
        <p>Ini adalah halaman panel nilai kriteria</p>
    </div>
    <div class="kanan-tabel-konten">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>Nilai Kriteria</span></li>
                </ol>
            </nav>
        </div>
</div>
    <div class="panel-Dkriteria">
        <table class="table table-striped table-bordered">
            <thead>
                <tr style="text-align:center;">
                    <th>Nomor</th>
                    <th>ID Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>Nilai Bobot Kriteria</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomer=1; ?>
                <?php $ambil_data1 = $conn->query("SELECT * FROM dkriteria JOIN nkriteria WHERE dkriteria.id_kriteria=nkriteria.id_kriteria"); ?>
                <?php while($hasil1 = $ambil_data1->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $nomer; ?></td>
                    <td><?php echo $hasil1['id_kriteria']; ?></td>
                    <td class="col-md-3"><?php echo $hasil1['nama_kriteria']; ?></td>
                    <td class="col-md-2">
                        <form method="post">
                        <input type="text" name="bobot" class="form-control" value="<?php echo $hasil1['nilai']; ?>" readonly>
                    </td>
                    <td>
                        <a class="btn btn-warning btn-block" href="index.php?page=ubahNkriteria&id=<?php echo $hasil1['id_kriteria']; ?>">Edit Bobot Kriteria</a>
                        <a class="btn btn-success btn-block" href="index.php?page=tambahNkriteria&id=<?php echo $hasil1['id_kriteria']; ?>">Tambah Nilai Angket</a>
                    </td>
                    <?php $nomer++; ?>
                    <?php } ?>
                </tr>
            </tbody>
            <tbody>
            <?php $query=mysqli_query($conn, "SELECT * FROM nkriteria ");
                while($data=mysqli_fetch_array($query)) {
                        $jumlah[]=$data['nilai'];
                }
                        $jumlah_nilai=array_sum($jumlah);
                echo "
                        <td colspan='3' align='center'><span style='font-weight:bold'>Jumlah</span</td>
                        <td align='center'><span style='font-weight:bold'>$jumlah_nilai</span</td>
                        <td></td>
                    </tr>
                    ";
                ?>
            </tbody>
            <thead>
                <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Nilai Bobot Kriteria</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
        </table>
        <table class="table table-striped table-bordered">
            <th colspan="20" style="text-align: center;">Proses Pengambilan Angket</th>
        <?php
        $kolom = 20; 
        $i=1; 
        $query1=mysqli_query($conn, "SELECT * FROM nkriteria ORDER BY id_kriteria ASC");
        while ($data1=mysqli_fetch_array($query1)) {
            if(($i) % $kolom== 1) {    
            echo'<tr class="hide.sometext">';   
            }
            echo '<th><b>'.$data1['id_kriteria'].'</b></th>';
            if(($i) % $kolom== 0) {    
            echo'</tr>';
            }
            echo '<td>'.$data1['normalisasi'].'</td>';  
        $i++;
            $n[]=$data1['normalisasi'];
        }       
            $jumlah_normalisasi = array_sum($n);
            echo "
            <tr>
                <th colspan='20' style='text-align: center;'>Σ W</th>
            </tr>
            <tr>
                <th colspan='20' style='text-align: center;'>$jumlah_normalisasi</th>
            </tr>";
        ?>
        </table>
            <div class="p-3">
                <button class="btn btn-success" name="simpan"><i class="fas fa-plus"></i>&nbsp;Simpan Data</button>
            </div>
            </form>
        <?php 
        if (isset($_POST['simpan'])) {
            $conn->query("UPDATE nkriteria SET nilai='$_POST[bobot]'");

            echo "<div class='alert alert-info'>Data Sudah Diubah!</div>";
            echo "<center><meta style='text-align:center;' http-equiv='refresh' content='1;url=index.php?page=Nkriteria'></center>";
        }
        ?>
        </div>
    </div>