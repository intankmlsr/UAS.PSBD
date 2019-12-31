<?php
	session_start();

	if(isset($_GET["submit"])){

	}
	include 'konek.php';

	$submit = $_GET["submit"];

	$getData = $mysqli ->query($mysqli, "SELECT * FROM member WHERE nama = ".$nama);

	if($getData->num_rows==0){
		header("location:admin.php");
		exit();
	}

	$getData = $getData->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title>UPDATE DATA MEMBER</title>
</head>
<body>
	<h1>Update Data Member</h1>
	<form action="doUpdate.php" method="post" enctype="multipart/form-data">
		<table>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input type="text" name="nik" value="<?=$getData["nik"]?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?=$getData["nama"]?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" value="<?=$getData["alamat"]?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?=$getData["email"]?>"></td>
		</tr>
		<tr>
			<td>No.hp</td>
			<td>:</td>
			<td><input type="number" name="no_hp" value="<?=$getData["no_hp"]?>"></td>
		</tr>
		<tr>
			<td>Card Member</td>
			<td>:</td>
			<td><select name="jenis_member" value="<?=$getData["jenis_member"]?>">
				<option>silahkan pilih</option>
				<option>Reguler</option>
				<option>VIP</option>
				<option>Premium</option>
				<option>unlimited</option>
			</select>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button name="submit">Submit</button></td>
		</tr>
	</table>
</form>

</body>
</html>

