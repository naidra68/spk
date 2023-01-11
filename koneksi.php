<?php 
$conn = new mysqli("localhost","root","","spk");

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username

    $result = mysqli_query($conn, "SELECT username FROM admin WHERE username='$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>alert('username sudah terdaftar!');</script>";
        return false;
    }

    if($password !== $password2){
        echo "<script>alert('konfirmasi password tidak sesuai!');</script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user dan pass ke database

    mysqli_query($conn, "INSERT INTO admin VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}
?>