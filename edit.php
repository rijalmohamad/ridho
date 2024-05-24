	<?php
	    include ("./Ridho/koneksi.php");

        $id = $_GET['id'];
        $tabel_siswa = $db->query("SELECT * FROM tabel_siswas where id='$id'");
        
        while ($d = $tabel_siswa->fetch_assoc()) {
		?>
<!DOCTYPE html>
<html>
<head>

<style>
body {
    background-image: url('image/image3.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
} 
</style>

	<link rel='shortcut icon' href='image1.png'>
	<title>halaman edit</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

	<body>
		<div class="w-50 mx-auto border p-3 mt-5 table table-bordered border-dark bg-info">
			<a href="form.php" class="bi bi-arrow-left h3"  style="color: black"></a>
			<h2>Edit Data</h2>
			<br>
				<form method="POST" action="data.php?id=<?=$id?>">
				<div class="form-group">
					<label for="nama_lengkap">Nama Lengkap</label>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input class="form-control" type="text" name="nama_lengkap"  value="<?php echo $d['nama_lengkap']; ?>">
				</div>

				<div class="form-group">
					<label for="address" class="form-label">Jurusan</label>
                    <select name="jurusan_id" class="form-select form-control" aria-label="Default select example">
						<?php
								$tabel_siswa= $db->query("SELECT * FROM tabel_jurusan WHERE id");
							
								while ($j = $tabel_siswa->fetch_assoc()) {
							?>
						<option  value="<?=$j['id']?>" <?php echo ($j['id']== $d['jurusan_id']) ?  "selected" : "" ;  ?>>   <?= $j['nama_jurusan']; ?></option>
						
						<?php } ?>
							
               		</select>
                </div>

				<div class="form-group">
					<label for="umur">Umur</label>
						<input class="form-control" type="number" name="umur" value="<?php echo $d['umur']; ?>">
				</div>

				<div class="form-group">
					<label for="kelahiran">Kelahiran</label>
						<input class="form-control" type="date" name="kelahiran" value="<?php echo $d['kelahiran']; ?>">
				</div>

				<div class="form-group">
					<label for="provinsi">Provinsi</label>
						<select class="form-control" name="provinsi" class="form-select" id="povinsi" value="<?php echo $d['provinsi']; ?>">
							<option value="Jawa Barat">Jawa Barat</option>
							<option value="Jawa Tengah">Jawa Tengah</option>
							<option value="Jawa Timur">Jawa Timur</option>
						</select>
				</div>

				<div class="form-group">
					<label for="kota_kabupaten">Kota/Kabupaten</label>
						<select class="form-control" name="kota_kabupaten" class="form-select" id="kota_kabupaten" value="<?php echo $d['kota_kabupaten']; ?>">
							<option value="Cirebon">Cirebon</option>
							<option value="Bandung">Bandung</option>
							<option value="Jakarta">Jakarta</option>
							<option value="Bogor">Bogor</option>
							<option value="Jogja">Jogja</option>
							<option value="Semarang">Semarang</option>
						</select>
				</div>
						
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat" rows="3"><?php echo $d['alamat']; ?></textarea>
				</div>
					
				<div class="form-group">
					<label for="nohp">No.Handphone</label>
						<input class="form-control" type="char" name="nohp" value="<?php echo $d['nohp']; ?>">
				</div>

				<label for="gender">Gender</label>
				<div class="form-check">
					<input class="form-check-input" type="radio"  <?php echo ($d['gender']== 'Pria') ?  "checked" : "" ;  ?>    name="gender"  value="Pria" id="flexRadioDefault1">
					<label class="form-check-label" name="Pria" for="flexRadioDefault1">Pria</label>
					<br>
					<input class="form-check-input" type="radio"  <?php echo ($d['gender']== 'Wanita') ?  "checked" : "" ;  ?>  name="gender"  value="Wanita"  id="flexRadioDefault2">
					<label class="form-check-label" name="Wanita" for="flexRadioDefault2">Wanita</label>
				</div>

				<br>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="update" value="Update">
				</div>
					
				</form>
		</div>		
<?php    
	}
?>

<footer>
     <hr />
     <i>di buat oleh RidhoDwiBarkah</i>
</footer>

	</body>
</html>