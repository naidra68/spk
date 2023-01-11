<div class="content-profile">
<h2>Profile</h2>
<img src="img/avatar_right.png" alt="">
    <?php 
        $take = $conn->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
        $result = $take->fetch_assoc();
    ?>
    <form method="POST" enctype="multipart/form-data">
    <div class="container jarak-hubungi">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $result['username']; ?>">
        </div>
    </div>
    <div class="form-group row jarak-hubungi">
        <label class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $result['username']; ?>">
        </div>
    </div>
    <div class="form-group jarak-hubungi">
        <center><button class="btn btn-success" name="simpan"><i class="fas fa-save"></i>&nbsp;Simpan Perubahan</button></center>
    </div>
    </div>
    </form>
</div>

<?php 
    if (isset($_POST['simpan'])) {
        $conn->query("UPDATE admin SET username='$_POST[nama]',username='$_POST[username]'
        WHERE id_admin='$_GET[id]'");
        echo "<script>alert('Informasi Profile telah berhasil disimpan!');</script>";
    }
?>
