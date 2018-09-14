<!DOCTYPE html>
<html>
<head>
<body>
	<title>Halaman Home</title>
	<link rel="stylesheet" href="css/style2.css">
	 <!-- <script src="js/main.js"></script> -->
</head>
<div class="container">
		<!-- header -->
		<header>
			<h1>Halaman Home</h1>
		</header><!-- endof header -->

		<!-- navigasi -->
		<nav>
			<a href="index.php">Home</a>
			<a href="https://github.com/mfauzianwar">Profile</a>
			<a href="kontak.html">Kontak</a>
		</nav><!-- endof navigasi -->
		<div class="wrap">
			<div class="side">
				<div class="widget-box">
					<h3 class="title">Widget Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi impedit </p>
				</div>
			</div>
		</div>
<?php
include_once 'koneksi.php';
$title = 'artikel';
$sql = 'SELECT * FROM artikel';
$result = mysqli_query($conn, $sql);

if ($result):
?>

<a href="tambah.php" class="btn btn-large">Tambah Artikel</a>
<table>
	<tr>
		<th>Judul</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	<?php while ($row = mysqli_fetch_array($result)): ?>
	<tr>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo date("j F Y", strtotime($row['tanggal'])); ?></td>
	<td>
		<a class="btn btn-default" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
		<a class="btn btn-alert" onclick="return confirm ('Yakin Akan menghapus data?');"
		href="hapus.php?id=<?php echo $row['id'];?>">delete</a>
	</td>
	</tr>
<?php endwhile; ?>
</table>
<?php endif; ?>
<footer>
  <p>&copy; 2018 - Coding Study clubs</p>
</footer>
</body>
</html>