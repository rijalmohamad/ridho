<?php


$server="localhost";
$user="root";
$password="";
$database="data_siswa";

$db = new mysqli($server, $user, $password, $database);
    if(!$db) {
        echo "koneksi data base rusak";
        die("error");
    }
