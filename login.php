<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require "koneksi.php";

if(isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username ='$username'");

    if(mysqli_num_rows($result) === 1 ) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>LOGIN PAGE</title>
</head>
<body id="bglogin">
    <div class="container p-5">
        <div class="row justify-content-center p-5">
            <h1 class="sapaan">WELCOME, ADMIN</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="row">
                    <div class="card-body panelmain">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <form action="" method="POST">
                                    <div class="mb-4 form-group">
                                        <input type="text" name="username" class="form-control form-control-user" placeholder="Username" id="username"/>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password" id="password"/>
                                    </div>
                                    <div class="mb-5">
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">LOGIN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>