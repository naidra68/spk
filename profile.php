<div class="content-profile">
<h2>Profile</h2>
<img src="img/avatar_right.png" alt="">
    <?php 
        $take = $conn->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
        $result = $take->fetch_assoc();
    ?>
    <div class="container jarak-hubungi">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $result['username']; ?>" readonly>
        </div>
    </div>
    <div class="form-group row jarak-hubungi">
        <label class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $result['username']; ?>" readonly>
        </div>
    </div>
    <div class="form-group jarak-hubungi">
        <center><a href="index.php?page=editprofile&id=<?php echo $result['id_admin'];?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>&nbsp;Edit Profile</a></center>
    </div>
    </div>
</div>