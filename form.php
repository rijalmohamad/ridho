<?php
        $noUrut= 1;

    // error_reporting(1);
    // session_start();

     include ("./Ridho/koneksi.php");

    //     $email="";

    // if(isset($_SESSION["email"])) {

    //    $email = $_SESSION["email"];

    // } else {

    //     header("refresh:0;login.php");

    // }
    

    if (isset($_POST['submit'])){
        $nama_lengkap= $_POST['nama_lengkap'];
        $jurusan_id=$_POST["jurusan_id"];
        $umur= $_POST['umur'];
        $kelahiran= $_POST['kelahiran'];
        $provinsi= $_POST['provinsi'];
        $kota_kabupaten= $_POST['kota_kabupaten'];
        $alamat= $_POST['alamat'];
        $nohp= $_POST['nohp'];
        $gender= $_POST['gender'];


    try {

        $q = "INSERT INTO `tabel_siswas` (`id`, `nama_lengkap`, `jurusan_id`, `umur`, `kelahiran`, `provinsi`, `kota_kabupaten`, `alamat`, `nohp`, `gender`) 
                VALUES (NULL, 
                '".$nama_lengkap."',
                '".$jurusan_id."',
                '".$umur."',
                '".$kelahiran."',
                '".$provinsi."',
                '".$kota_kabupaten."',
                '".$alamat."',
                '".$nohp."',
                '".$gender."'
                    
                )";
            
        $submit = $db->query($q);


        } 
        
        catch (\Exception $th) {
            print_r($th->getMessage());
            exit;
        }

        if ($submit){
            echo "<script>window.alert('Data berhasil di simpan')
            window.location='form.php'</script>";
        }else{
            echo "<script>window.alert('Data gagal')
            window.location='form.php'</script>";
        }

    }

    
?>

<html>
<head>
    <link rel='shortcut icon' href='image/smk2.jpg'>
    <title>form</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-info">
    
    <nav class="navbar navbar-expand navbar-white navbar-light bg-white" style="padding-top:1; padding-bottom:1px">
    
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="#">
                <img src="image/smk2.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                <strong>SMK Al-Hidayah </strong>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="halaman.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="form.php" class="nav-link">Form</a>
            </li>
        </ul>
    
        <ul class="navbar-nav ml-auto">
    
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" data-target="#navbar-search2" href="#" role="button">
                <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block" id="navbar-search2">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    </div>
                </form>
                </div>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
                <form action="data.php" method="POST">
                    <button type="submit" value="logout" name="logout" class="btn btn-danger form-control">logout</button>
                </form>
                </a>
            </li>
        </ul>
    </nav>

    <div class="" style="padding: 50px;">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 ">
                <h1 class="text-center"><strong>Formulir</strong></h1>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="formGroupExampleInput" required>
                    </div> 
    
                    <label for="address" class="form-label">Jurusan</label>
                    <div class="form-group">
                        <select name="jurusan_id" class="form-select form-control" aria-label="Default select example">
                        <option selected>Jurusan</option>
                        <?php
                            $tabel_siswa= $db->query("SELECT * FROM tabel_jurusan ORDER BY id ASC");     
                            while ($d = $tabel_siswa->fetch_assoc()) {
                            ?>
                        <option value="<?= $d['id']; ?>"><?= $d['nama_jurusan']; ?></option>
                        
                           <?php } ?>          
                    </select>
                    </div>
    
                    <div class="form-group">  
                        <label for="formGroupExampleInput2">Umur</label>
                        <input type="number" class="form-control" name="umur" id="formGroupExampleInput2">
                    </div>
    
                    <div class="form-group">    
                        <label for="formGroupExampleInput2">Kelahiran</label>
                        <input type="date" class="form-control" name="kelahiran" id="email" aria-describedby="emailHelp">
                    </div>
    
                    <label name="provinsi" for="address" class="form-label">Provinsi</label>
                    <div class="form-group">
                        <select name="provinsi" class="form-select form-control" aria-label="Default select example">
                        <option selected>Provinsi</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        </select>
    
                        <label name="kota_kabupaten" for="address" class="form-label">Kota/Kabupaten</label>
                        <select name="kota_kabupaten" class="form-select form-control" aria-label="Default select example">
                        <option selected>Kota/Kabupaten</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Jogja">Jogja</option>
                        <option value="Semarang">Semarang</option>
                        </select>
                    </div>
                    
                    <div class="form-group">  
                        <label for="formGroupExampleInput2">Alamat</label>
                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
    
                    <div class="form-group">
                        <label for="disabledTextInput" name="nohp" class="form-label">No.Handhphone</label>
                        <input type="char" name="nohp"  id="disabledTextInput" class="form-control" placeholder="+62">
                    </div>
    
                        <label name="gender" for="email" class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" checked name="gender" value="Pria" id="flexRadioDefault1">
                        <label class="form-check-label" name="pria" for="flexRadioDefault1">Pria</label>
                        <br>
                        <input class="form-check-input" type="radio" name="gender" value="Wanita"  id="flexRadioDefault2">
                        <label class="form-check-label" name="wanita" for="flexRadioDefault2">Wanita</label>
                    </div>
    
                    <br>
                    <button type="submit" value="submit" name="submit" class="btn btn-primary form-control">Submit</button>
                </form>
                
            </div>
    
            
    
            <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8 ">      
                <div class="mt-5">&nbsp;</div>
                <div class="mt-4">&nbsp;</div>
    
                <div class="card">
                        <div class="card-header">
                        <h3 class="card-title bi bi-table"><strong> Tabel Data</strong></h3>
                        </div>
    
                    <div class="table-responsive">
                        </tr>
                        <table class="table table-bordered border-dark table bg-white">
                            <thead class="table-dark">
                                <tr>
                                <th>NO</th>
                                <th scope="col">NamaLengkap</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Kelahiran</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Kota/Kabupaten</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No.Handphone</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
    
                                <?php
                                    $tabel_siswa= $db->query("SELECT * FROM tabel_siswas ORDER BY nama_lengkap ASC");
                                    while ($d = $tabel_siswa->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?= $noUrut++; ?></td>
                                        <td><?= $d['nama_lengkap']; ?></td>
                                        <td><?= $d['jurusan_id']; ?></td>
                                        <td><?= $d['umur']; ?></td>
                                        <td><?= $d['kelahiran']; ?></td>
                                        <td><?= $d['provinsi']; ?></td>
                                        <td><?= $d['kota_kabupaten']; ?></td>
                                        <td><?= $d['alamat']; ?></td>
                                        <td><?= $d['nohp']; ?></td>
                                        <td><?= $d['gender']; ?></td>
                                        <td>
                                            <a class="bi bi-pencil-square h5" style="color: yellow" href="edit.php?id=<?php echo $d['id']; ?>"></a>
                                            <a class="bi bi-trash h5" style="color: red" href="hapus.php?id=<?php echo $d['id']; ?>" ></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                        </table>
                </div>
            </div>
            <!-- <img style= width:380 src="image/smk2.jpg" alt=""> -->
        </div>
    </div>
</body>

<footer>
     <hr />
     <i>di buat oleh RidhoDwiBarkah</i>
</footer>

</html>