<?php 
require  'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ai Showroom</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
// Bootstrap
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
<body>
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="portfolio-bootstrap5/index.html">syahdewa.ai</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/syahdewa.ai">Contact</a>
            </li>
          </ul>
          <span class="navbar-text"></span>
        </div>
      </div>
    </nav>
    <br>
    <br>
    
<h1>DAFTAR KOLEKSI MOBIL AI SHOWROOM</h1>
<p>
<a href="tambah.php">Tambah Koleksi </a>
<br><br>

<form action="" method="post">
	
	<input type="text" name="keyword" size="30" autofocus
	placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari">cari</button>


</form></p>
<br>
<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
		<th>No</th>
		<th>Edit</th>
		<th>Gambar</th>
		<th>Merk</th>
		<th>Harga</th>
		<th>Tipe</th>
		<th>Bahan Bakar</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>

	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
			return confirm('yakin?');">hapus</a>
		</td>
		<td><img src="gambar/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>	
<?php endforeach; ?>
</table>
</body>
</html>