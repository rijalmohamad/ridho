<?php

session_start(); 

if(isset($_SESSION["email"])) {

    header("refresh:0;halaman.php");

 }


include ("./Ridho/koneksi.php");

if(isset($_POST["daftar"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql ="INSERT INTO daftar (email, password) VALUES
    ('$email','$password')";

    if($db->query($sql)) {
        echo "<script>window.alert('Daftar Berhasil')
        window.location='login.php'</script>";
    }else{
        echo "<script>window.alert('Daftar Gagal')
            window.location='register.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

    <style>
    body {
        background-image: url('image/image6.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
        padding: 0;
    } 
    </style>
    
        <link rel='shortcut icon' href='image/smk2.jpg'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
    </head>

        <header>      
            <h2><strong>Halaman Daftar</strong></h2>
            <p><em>sudah punya akun? <a href="login.php">Login</a></em></p>
        </header>

        <body style="text-align:center; container: ; padding: 50px;" class="text-white">
            

            <main>
                <p><u>Halo silahkan Daftar</u></P>
            </main>
            
            <form class="m-auto" action="register.php" method="POST" style="width:300px">
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
                            <span class="bi -fill"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">I agree to the <a href="#">terms</a></label>
                        </div>
                    </div>

                        <div class="col-5">
                            <button type="submit" name="daftar" class="btn btn-success btn-block">Daftar</button>
                        </div>
                </div>

            </form>
            
        </body>
        <footer>
            <hr />
            <i class="text-dark">di buat oleh RidhoDwiBarkah</i>
        </footer>
</html>