<?php

session_start(); 

// proses daftar
    $isdaftar = false;
    if(isset($_POST["daftar"]))  {
        $isdaftar = true;

    $emaill=$_POST["emaill"];
    $passwordd=$_POST["passwordd"];
    header("refresh:3;login.php");
    }



// proses login
    $isLogin = false;
    if(isset($_POST["login"]))  {
        $isLogin = true;
    
        $email=$_POST["email"];
        $password=$_POST["password"];
        
        if($email == "ridho@gmail.com") {
        
        } else {
            echo "email salah";
            exit;
        }
        
        if($password == "123") {
            $_SESSION['username'] = $email;
            header("refresh:3;form.php");
        
        } else {
            echo "password salah";
            exit;
        }

    }


// // proses masuk
// $ismasuk = false;
// if(isset($_POST["masuk"]))  {
//     $ismasuk = true;

// session_destroy();
// header('location:login.php');

// }    


// proses logout
        $isLogout = false;
        if(isset($_POST["logout"]))  {
            $isLogout = true;

        session_destroy();
        header('location:login.php');

    }    

 // input data
    $isinput = false;
    if(isset($_POST["submit"]))  {
        $isinput = true;

        $nama_lengkap=$_POST["nama_lengkap"];
        $umur=$_POST["umur"];
        $kelahiran=$_POST["kelahiran"];
        $provinsi=$_POST["provinsi"];
        $kota=$_POST["kota"];
        $alamat=$_POST["alamat"];
        $nohp=$_POST["nohp"];
        $gender=$_POST["gender"];
             
    }

// update data

    $isupdate = false;
    if(isset($_POST["update"])) {
        $isupdate = true;

        include ("./Ridho/koneksi.php");

        $id = $_GET['id'];
        $nama_lengkap=$_POST["nama_lengkap"];
        $jurusan_id=$_POST["jurusan_id"];
        $umur=$_POST["umur"];
        $kelahiran=$_POST["kelahiran"];
        $provinsi=$_POST["provinsi"];
        $kota_kabupaten=$_POST["kota_kabupaten"];
        $alamat=$_POST["alamat"];
        $nohp=$_POST["nohp"];
        $gender=$_POST["gender"];
               
        $q ="UPDATE `tabel_siswas` SET 
                    nama_lengkap='".$nama_lengkap."',
                    jurusan_id='".$jurusan_id."',
                    umur='".$umur."',
                    kelahiran='".$kelahiran."',
                    provinsi='".$provinsi."',
                    kota_kabupaten='".$kota_kabupaten."',
                    alamat='".$alamat."',
                    nohp='".$nohp."',
                    gender='".$gender."'
                    WHERE id='$id'";
        
                    $update = $db->query($q);

                    if ($update){
                        echo "<script>window.alert('Data berhasil di update')
                        window.location='form.php'</script>";
                    }else{
                        echo "<script>window.alert('Data gagal')
                        window.location='form.php'</script>";
                    }
            
    }

    

       


    // koneksi data base
//   $server="localhost";
//   $user="root";
//   $password="";
//   $database="data_siswa";

//   $db = new mysqli($server, $user, $password, $database);

//     if(!$db) {
//         echo "koneksi data base rusak";
//         die("error");
//     }

//     $sql="SELECT * from tabel_siswa";

//     $result = $db -> query($sql);
//     while($row = $result -> fetch_array(MYSQLI_BOTH)) {
        
//         echo $row['nama_lengkap'];

//     }

//     print_r($row);

//     echo "koneksi berhasil";

?>


<link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
<body style="container: ; padding: 50px; background-color:aqua;">

<?php if ($isinput) { ?>
        <h2><?=$nama_lengkap?></h2>
        <h2><?=$umur?></h2>
        <h2><?=$kelahiran?></h2>
        <h2><?=$provinsi?></h2>
        <h2><?=$kota?></h2>
        <h2><?=$alamat?></h2>
        <h2><?=$nohp?></h2>
        <h2><?=$gender?></h2>

    <?php } ?>

    <?php if ($isLogin) { ?>

        <h2><strong>Selamat anda sudah login <?=$email ?></strong></h2>
        <div class="spinner-border"></div>


    <?php } ?>

    <?php if ($isdaftar) { ?>

        <h2>Selamat anda berhasil mendaftar <?=$emaill ?></h2>

    <?php } ?>

</body>
<footer>
     <hr />
     <i>di buat oleh RidhoDwiBarkah</i>
</footer>