<?php
    include ("./Ridho/koneksi.php");

    $id = $_GET['id'];
    $tabel_siswa = $db->query("DELETE FROM tabel_siswas where id='$id'");
    mysqli_query($conn, $tabel_siswa);

    header("location: form.php");
?>
