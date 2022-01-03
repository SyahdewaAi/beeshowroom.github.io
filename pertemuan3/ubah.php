<?php 
require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id =$id")[0];

if (isset($_POST["submit"]) ) {

  if( ubah($_POST) > 0 ) {
  	echo "
  	<script>
  	  alert('data berhasil diubah');
  	  document.location.href = 'index.php';
  	</script>
  	";
  }else{
    echo "
  	<script>
  	  alert('data gagal diubah');
  	  document.location.href = 'index.php';
  	</script>
  	";
  }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ubah data mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>ubah data mahasiswa</h1>

<form action="" method="post">
	<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
	<ul>
		<li>
			<label for="nrp">Harga :</label>
			<input type="text" name="nrp" id="nrp" required 
			value="<?= $mhs["nrp"]; ?>">
		</li>
		<li>
			<label for="nama">Merk :</label>
			<input type="text" name="nama" id="nama"
			value="<?= $mhs["nama"]; ?>">
		</li>
		<li>
			<label for="email">Tipe :</label>
			<input type="text" name="email" id="email"
			value="<?= $mhs["email"]; ?>">
		</li>
		<li>
			<label for="jurusan">Bahan Bakar :</label>
			<input type="text" name="jurusan" id="jurusan"
			value="<?= $mhs["jurusan"]; ?>">
		</li>
		<li>
			<label for="gambar">gambar :</label>
			<input type="text" name="gambar" id="gambar"
			value="<?= $mhs["gambar"]; ?>">
		</li>
		<li>
			<button type="submit" name="submit">ubah data</button>
		</li>
	</ul>
	
</form>
<a href="index.php">kembali ke halaman</a>
</body>
</html>
