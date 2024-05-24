<?php

    error_reporting(1);
    session_start();

    include ("./Ridho/koneksi.php");

        $email="";

    if(isset($_SESSION["email"])) {

       $email = $_SESSION["email"];

    } else {

        header("refresh:0;login.php");

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='shortcut icon' href='image/smk2.jpg'>
    <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>home</title>
</head>


<body class="sidebar-mini" style="height: auto;">

    <nav class="navbar navbar-expand navbar-white navbar-light ">


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
                </a>
                <div class="navbar-search-block" id="navbar-search2">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
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
        
    <div class="container">
            <div class="row">
                    <h2>Jurusan</h2>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                            <img src="image/tkj.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><strong>Teknik Komputer Jaringan.</strong></p>
                                    <h6>TKJ merupakan sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar.</h6>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="image/tkrr.jpg" class="card-img-top" alt="..."/>
                                <div class="card-body">
                                    <p class="card-text"><strong>Teknik Kendaraan Ringan Otomotif.</strong></p>
                                    <h6> kompetensi keahlian dibidang TKRO yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan. Kompetensi keahlian TKRO menyiapkan peserta didik untuk bekerja pada pekerjaan jasa perawatan dan perbaikan didunia usaha / industri.</h6>
                                </div>
                            </div>
                        </div>

                        <div class="w-100"></div>

                        <div class="col pt-3">
                            <div class="card">
                                <img src="image/akl.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><strong>Akutansi Keuangan Lembaga.</strong></p>
                                    <h6>(AKL) adalah suatu jurusan dari rumpun Bisnis dan Manajemen (Bismen) yang mempelajari pencatatan dan penyusunan laporan keuangan secara manual maupun menggunakan sistem komputerisasi.</h6>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col pt-3">
                            <div class="card">
                                <img src="image/pbs.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><strong>Perbangkan Syariah.</strong></p>
                                    <h6>Jurusan Perbankan Syariah merupakan pilihan jurusan yang mempelajari tentang kegiatan perbankan yang berbasiskan aturan syariah Islam. Lembaga perbankan syariah sendiri di Indonesia sudah resmi berdiri sejak tahun 1991.</h6>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
    </div>


    <div class="container">
            <h2>Ekstra Kurikuler</h2>
            <div class="row responsiv">
                    <div class="col">
                        <div class="card">
                            <img src="image/paskibra.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>Paskibra.</strong></p>
                                <h6>Paskibra merupakan pasukan yang bertugas untuk mengibarkan bendera. ini masuk ke dalam kegiatan ekstrakurikuler yang ada di sekolah.paskibra dilakukan pada peringatan HUT RI, hari pancasila, hari pendidikan dan peringatan-peringatan penting lainnya.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="image/marching.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>Marching Band.</strong></p>
                                <h6>Marching Band (Orkes Barisan) adalah sekelompok barisan orang yang memaikan satu atau beberapa lagu dengan menggunakan sejumlah kombinasi alat musik (tiup, perkusi dan sejumlah instrument pit) secara bersama-sama.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="image/pramuka.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><strong>Pramuka.</strong></p>
                                <h6>Gerakan Pramuka adalah organisasi pendidikan nonformal yang menyelenggarakan pendidikan kepanduan yang dilaksanakan di Indonesia, Kata Pramuka merupakan singkatan dari Praja Muda Karana, yang memiliki arti Orang Muda yang Suka Berkarya.</h6>
                            </div>
                        </div>
                    </div>
            </div>
    </div>

</body>
<footer>
     <hr />
     <i>di buat oleh RidhoDwiBarkah</i>
</footer>
</html>