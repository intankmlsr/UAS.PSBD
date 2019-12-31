<?php
	session_start();
	$mysqli = new mysqli ('localhost', 'root', '', 'uas') or die (mysqli_error($mysqli));

	if(isset($_POST['submit'])){
		include 'konek.php';
	
		$nik = $_POST["nik"];
		$nama = $_POST["nama"];
		$alamat = $_POST["alamat"];
		$email = $_POST["email"];
		$no_hp = $_POST["no_hp"];
		$jenis_member = $_POST["jenis_member"];


		$mysqli = mysqli_query($mysqli, "INSERT INTO member (nik,nama,alamat,email,no_hp,jenis_member) VALUES('$nik','$nama','alamat','$email','$no_hp','$jenis_member')");

			echo "Data member berhasil ditambahkan";
	
	}
?>