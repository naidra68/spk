<?php 
        if (isset($_POST['kirim'])) {
            $conn->query("INSERT INTO contact 
            (nama_depan,nama_belakang,email,keterangan)
            VALUES('$_POST[depan]','$_POST[belakang]','$_POST[email]','$_POST[keterangan]')");
            
            echo "<div class='alert alert-success'>Pesan Anda sudah terkirim!</div>";
        }
?>
