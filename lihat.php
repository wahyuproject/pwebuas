<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hit Counter</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="containerlihat">
		<div class="lihat">
			<h1>Daftar Guestbook</h1>
		<?php 
	
	echo "<head><title>My Guest Book</title></head>";
	$fp = fopen("guestbook.txt","r");
	echo "<table border=0>";

	while ($isi = fgets($fp,80)) {
		$pisah = explode("|",$isi);
	echo "<tr><td>Nama </td>
		<td>: $pisah[0]
		</td></tr>";
	echo "<tr><td>Alamat </td>
		<td>: $pisah[1]
		</td></tr>";
	echo "<tr><td>Email </td>
		<td>: $pisah[2]
		</td></tr>";
	echo "<tr><td>Komentar </td>
		<td>: $pisah[3]
		</td></tr><br>
		<tr>
		<td>&nbsp;<hr></td>
		<td>&nbsp;<hr></td>
		</tr>";
	}

	echo "</table";
 ?>
 </div>

 <div class="lihat2">::<a href=guestbook.php> Klik Disini Isi Form Guestbook :: </a></div>
 <div class="lihat2">::<a href=index.php> Klik Disini Isi Untuk Kembali Ke Home :: </a></div>

 	</div>
</body>
</html>
