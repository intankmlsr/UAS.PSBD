<?php

//konek ke database

$mysqli = mysqli_connect("localhost", "root", "", "uas");

//ambil data adari tabelmember /query data
$mysqli = mysqli_query($mysqli, "SELECT * FROM member")

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>

	<style type="text/css">
		body{
			background-color: #DEB887;
			/*background-image: url("assets/images/6.jpg");*/
			background-size: 50%;
			
		}
	</style>
</head>
<body>

	<h1>DAFTAR MEMBER OF CO.CHOC</h1>

	<table border="1" cellpadding="10" cellspacing="0">

		<tr>

			<th>No.</th>
			<th>Aksi</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>alamat</th>
			<th>email</th>
			<th>no.Hp</th>
			<th>Card</th>
		</tr>

		<?php $i = 1; ?>
		<?php while ($row = mysqli_fetch_assoc($mysqli) ) : ?>

		<tr>
			<td><?= $i ?></td>
			<td>
				
				<a href="delete.php?nama=<? php echo $row['nama']?>">delete</a> 
			</td>
			<td><?php echo $row["nik"]; ?></td>
			<td><?php echo $row["nama"]; ?></td>
			<td><?php echo $row["alamat"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["no_hp"]; ?></td>
			<td><?php echo $row["jenis_member"]; ?></td>
		</tr>
		<?php $i++ ?>
	<?php endwhile; ?>

</body>
</html>