<?php 
require 'functions.php';

if (isset($_POST["submit"]) ) {

  if( tambah($_POST) > 0 ) {
  	echo "
  	<script>
    	alert('data berhasil ditambahkan');
    	document.location.href = 'index.php';
  	</script>
  	";
  }else{
    echo "
  	<script>
    	alert('data gagal ditambahkan');
    	document.location.href = 'index.php';
  	</script>
  	";
  }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Koleksi Mobil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Tambah Koleksi Mobil</h1>
<h3>
<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nrp">Harga :</label>
			<input type="text" name="nrp" id="nrp">
		</li>
		<li>
			<label for="nama">Merk :</label>
			<input type="text" name="nama" id="nama">
		</li>
		<li>
			<label for="email">Tipe :</label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="jurusan">Bahan Bakar :</label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="gambar">gambar :</label>
			<input type="file" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">tambah data</button>
		</li>
	</ul>
</h3>
	
</form>
<a href="index.php">kembali ke halaman</a>
</body>
<h2> Created By Love syahdewa.ai</h2>
</html>