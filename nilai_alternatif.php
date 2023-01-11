<div class="content-dashboard">
    <div class="icon-kiri-dashboard">
        <i class="fas fa-cogs text-left"></i>
    </div>
    <div class="kanan-dashboard">
        <h2>NILAI ALTERNATIF</h2>
        <p>Ini adalah halaman panel nilai alternatif</p>
    </div>
    <div class="kanan-tabel-konten">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>Nilai Alternatif</span></li>
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
      <th></th>
      <?php 
      $query1=mysqli_query($conn, "SELECT * FROM dalternatif");
      while ($data1=mysqli_fetch_array($query1)) {
      ?>
      <tr>
      <td class="col-sm-4"><?php echo $data1["nama"]; ?></td>
      <td><input type="text" style="text-align:center;" class="form-control" name="" id="" value="<?php echo $data1['C1']; ?>" readonly></td>
      <td><input type="text" style="text-align:center;" class="form-control" name="" id="" value="<?php echo $data1['C2']; ?>" readonly></td>
      <td><input type="text" style="text-align:center;" class="form-control" name="" id="" value="<?php echo $data1['C3']; ?>" readonly></td>
      <td><input type="text" style="text-align:center;" class="form-control" name="" id="" value="<?php echo $data1['C4']; ?>" readonly></td>
      <td><input type="text" style="text-align:center;" class="form-control" name="" id="" value="<?php echo $data1['C5']; ?>" readonly></td>
      <td>
        <a class="btn btn-warning" href="index.php?page=ubahNAlternatif&id=<?php echo $data1['id_alternatif']; ?>">Edit</a>
      </td>
      </tr>
      <?php } ?>
      </table>
      <table class="table table-bordered">
        <?php 
        $query2=mysqli_query($conn, "SELECT * FROM dalternatif");
        while ($data2=mysqli_fetch_array($query2)) {
            $C1[] = $data2['C1'];
            $C2[] = $data2['C2'];
            $C3[] = $data2['C3'];
            $C4[] = $data2['C4'];
            $C5[] = $data2['C5'];
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
        echo "<tr>
            <th>A+</th>
            <td>$maxC1</td>
            <td>$maxC2</td>
            <td>$maxC3</td>
            <td>$maxC4</td>
            <td>$maxC5</td>
        </tr>
        <tr>
            <th>A-</th>
            <td>$minC1</td>
            <td>$minC2</td>
            <td>$minC3</td>
            <td>$minC4</td>
            <td>$minC5</td>
        </tr>";
    ?>
    </table>
    </div>
</div>
