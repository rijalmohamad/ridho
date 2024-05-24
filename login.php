<?php
include ("./Ridho/koneksi.php");

session_start(); 

if(isset($_SESSION["email"])) {

    header("refresh:0;halaman.php");

 }



if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql ="SELECT * FROM daftar WHERE
    email='$email' AND password='$password'";

    $result = $db->query($sql);

    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        $_SESSION['email'] = $email;

        echo "<script>window.alert('Berhasil Login')
            window.location='halaman.php'</script>";
    }else{
        echo "<script>window.alert('Gagal Login/Akun Tidak Di Temukan')
            window.location='login.php'</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>

    <style>
    body {
        background-image: url('image/image3.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
        padding: 0;
    } 
    </style>

    <link rel='shortcut icon' href='image/smk2.jpg'>
    <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

    <header>
            <h2><strong>Halaman Login</strong></h2>
            <p><em>belum punya akun? <a href="register.php">Register</em></a></p>
    </header>

    <body background="image3.jpg" style="text-align:center; container: ; padding: 50px;" class="text-white">
    
            <main>
                <p><u>Halo silahkan login</u></P>
            </main>

                <div class="container w-full">
                    <div class="m-auto w-full">
        <form class="m-auto" action="login.php" method="POST" style="width:300px;">
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" required placeholder="Email">
                     <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="bi bi-envelope-fill"></span>
                        </div>
                    </div>
            </div>
                            
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" required placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                            <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="col-5">
                    <button type="submit" name="login"  class="btn btn-primary btn-block">Login</button>
                </div>
             </div>
                        </form>
                    </div>
                </div>
            </body>
            <footer>
                <hr />
                <i class="text-dark">di buat oleh RidhoDwiBarkah</i>
            </footer>
</html>

<!-- <script>
    function yaya() (

        alert("xxxx");
    )
</script> -->