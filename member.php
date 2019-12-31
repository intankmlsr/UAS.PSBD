<?php
$member = [
	["321111","rara","korea","rara@gmail.com","8500"],
	["3232323","intan","bandung","intankmlsr@gmail.com","094395"]
];







?>


<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MEMBER</title>
</head>
<body>

	<h1>DAFTAR MEMBER</h1>

	<?php foreach( $member as $mb) :?>

	<ul>
		<li>Nik:<?= $mb["nik"]; ?></li>
		<li>Nama:<?= $mb["nama"]; ?></li>
		<li>Alamat:<?= $mb["alamat"]; ?></li>
		<li>email:<?= $mb["email"]; ?></li>
		<li>No_tlp:<?= $mb["no_tlp"]; ?></li>

	</ul>

	<?php endforeach; ?>

</body>
</html>