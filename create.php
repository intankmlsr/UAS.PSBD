<?php
	session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MEMBER</title>
	<style type="text/css">
		body{
			
			/*background-image: url("assets/images/2.jpg");*/
			background-color: #DEB887; 

		}

	</style>
</head>
<body>
	<h1>DAFTAR UNTUK MENJADI MEMBER</h1>
	<form action="addMember.php" method="post" enctype="multipart/form">
	<table>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input type="text" name="nik"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>No.hp</td>
			<td>:</td>
			<td><input type="number" name="no_hp"></td>
		</tr>
		<tr>
			<td>Card Member</td>
			<td>:</td>
			<td><select name="jenis_member">
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

<?php
	if(isset($_SESSION["message"])) {
		echo $_SESSION["message"];

		unset($_SESSION["message"]);
	}

?>



</body>
</html>