<div class="content-dashboard">
    <div class="icon-kiri-dashboard">
        <i class="fas fa-bullseye text-left"></i>
    </div>
    <div class="kanan-dashboard">
        <h2>GOALS</h2>
        <p>Ini adalah halaman panel Goals</p>
    </div>
    <div class="kanan-tabel-konten">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>Goals</span></li>
                </ol>
            </nav>
        </div>
</div>
    <div class="panel-Dkriteria">
    <table class="table table-striped table-bordered">
    <?php
      $kolom = 10;    
      $i=1;       
      $query=mysqli_query($conn, "SELECT * FROM dkriteria JOIN dalternatif WHERE dkriteria.id_kriteria=dalternatif.id_alternatif");
      echo "<th></th>";
      while ($data=mysqli_fetch_array($query)) {
        if ($i >= $kolom) {
            echo "<tr>
            </tr>";
            $i = 0;
        }
        $i++;
      ?>
      <th><?php echo $data["id_kriteria"]; ?></th>
      <?php } ?>
      <?php 
      $query1=mysqli_query($conn, "SELECT * FROM dalternatif JOIN nkriteria WHERE dalternatif.id_alternatif=nkriteria.id_kriteria2");
      while ($data1=mysqli_fetch_array($query1)) {
        $C1[] = $data1['C1'];
        $C2[] = $data1['C2'];
        $C3[] = $data1['C3'];
        $C4[] = $data1['C4'];
        $C5[] = $data1['C5'];
        $nama[] = $data1['nama'];
        $angket[] = $data1['normalisasi'];
    }
    $minC1 = min($C1);
    $maxC1 = max($C1);
    $minC2 = min($C2);
    $maxC2 = max($C2);
    $minC3 = min($C3);
    $maxC3 = max($C3);
    $minC4 = min($C4);
    $maxC4 = max($C4);
    $minC5 = min($C5);
    $maxC5 = max($C5);
    $uc11 =($C1[0] - $minC1)/($maxC1-$minC1);
    $uc12 =($C2[0] - $minC2)/($maxC2-$minC2);
    $uc13 =($C3[0] - $minC3)/($maxC3-$minC3);
    $uc14 =($C4[0] - $minC4)/($maxC4-$minC4);
    $uc15 =($C5[0] - $minC5)/($maxC5-$minC5);
    $uc21 =($C1[1] - $minC1)/($maxC1-$minC1);
    $uc22 =($C2[1] - $minC2)/($maxC2-$minC2);
    $uc23 =($C3[1] - $minC3)/($maxC3-$minC3);
    $uc24 =($C4[1] - $minC4)/($maxC4-$minC4);
    $uc25 =($C5[1] - $minC5)/($maxC5-$minC5);
    $uc31 =($C1[2] - $minC1)/($maxC1-$minC1);
    $uc32 =($C2[2] - $minC2)/($maxC2-$minC2);
    $uc33 =($C3[2] - $minC3)/($maxC3-$minC3);
    $uc34 =($C4[2] - $minC4)/($maxC4-$minC4);
    $uc35 =($C5[2] - $minC5)/($maxC5-$minC5);
    $uc41 =($C1[3] - $minC1)/($maxC1-$minC1);
    $uc42 =($C2[3] - $minC2)/($maxC2-$minC2);
    $uc43 =($C3[3] - $minC3)/($maxC3-$minC3);
    $uc44 =($C4[3] - $minC4)/($maxC4-$minC4);
    $uc45 =($C5[3] - $minC5)/($maxC5-$minC5);
    $uc51 =($C1[4] - $minC1)/($maxC1-$minC1);
    $uc52 =($C2[4] - $minC2)/($maxC2-$minC2);
    $uc53 =($C3[4] - $minC3)/($maxC3-$minC3);
    $uc54 =($C4[4] - $minC4)/($maxC4-$minC4);
    $uc55 =($C5[4] - $minC5)/($maxC5-$minC5);

    $p1 = ($angket[0] * $uc11) + ($angket[1] * $uc12) + ($angket[2] * $uc13) + ($angket[3] * $uc14) + ($angket[4] * $uc15);
    $p2 = ($angket[0] * $uc21) + ($angket[1] * $uc22) + ($angket[2] * $uc23) + ($angket[3] * $uc24) + ($angket[4] * $uc25);
    $p3 = ($angket[0] * $uc31) + ($angket[1] * $uc32) + ($angket[2] * $uc33) + ($angket[3] * $uc34) + ($angket[4] * $uc35);
    $p4 = ($angket[0] * $uc41) + ($angket[1] * $uc42) + ($angket[2] * $uc43) + ($angket[3] * $uc44) + ($angket[4] * $uc45);
    $p5 = ($angket[0] * $uc51) + ($angket[1] * $uc52) + ($angket[2] * $uc53) + ($angket[3] * $uc54) + ($angket[4] * $uc55);

    echo "
    <tr>
        <td class='col-sm-3'>$nama[0]</td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc11'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc12' readonly></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc13' readonly></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc14'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc15' readonly></td>
    </tr>
    <tr>
        <td class='col-sm-3'>$nama[1]</td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc21'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc22' readonly></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc23'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc24' readonly></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc25'></td> 
    </tr>
    <tr>
        <td class='col-sm-3'>$nama[2]</td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc31' readonly></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc32'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc33'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc34'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc35' readonly></td> 
    </tr>
    <tr>
        <td class='col-sm-3'>$nama[3]</td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc41'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc42'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc43'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc44'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc45' readonly></td> 
    </tr>
    <tr>
        <td class='col-sm-3'>$nama[4]</td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc51'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc52'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc53'></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc54' readonly></td>
        <td><input type='text' style='text-align:center;' class='form-control' name='' value='$uc55' readonly></td> 
    </tr>
    </table>";
    echo "
    <center><h3>Hasil Akhir</h3></center>
    <center><table style='width:70%;' class='table table-striped table-bordered'>
        <tr style='text-align:center;'>
        <th>NAMA UNIVERSITAS</th>
        <th>PREFERENSI</th>
        <th>RANKING</th>
        </tr>
        <tr>
        <td class='col-sm-4'>$nama[0]</td>
        <td style='text-align:center;' class='col-sm-2'>$p1</td>
        <td style='text-align:center;' class='col-sm-2'>1</td>
        </tr>
        <tr>
        <td class='col-sm-4'>$nama[2]</td>
        <td style='text-align:center;' class='col-sm-2'>$p3</td>
        <td style='text-align:center;' class='col-sm-2'>2</td>
        </tr>
        <td class='col-sm-4'>$nama[1]</td>
        <td style='text-align:center;' class='col-sm-2'>$p2</td>
        <td style='text-align:center;' class='col-sm-2'>3</td>
        </tr>
        </tr>
        <td class='col-sm-4'>$nama[4]</td>
        <td style='text-align:center;' class='col-sm-2'>$p5</td>
        <td style='text-align:center;' class='col-sm-2'>4</td>
        </tr>
        </tr>
        <td class='col-sm-4'>$nama[3]</td>
        <td style='text-align:center;' class='col-sm-2'>$p4</td>
        <td style='text-align:center;' class='col-sm-2'>5</td>
        </tr>
    </table></center>
    <div class='alert alert-info' role='alert'>
    Sebagai penunjang keputusan yang telah diperoleh menyatakan bahwa <b>$nama[0]</b> menjadi universitas terbaik di Indonesia.
    </div>
    <div style='float:right;'>
    <a href='#' style='color: #fff;' class='btn btn-warning'><i class='fas fa-print'></i> Cetak</a>
    </div>
    <br/><br/>";
        ?>
    </div>
</div>
