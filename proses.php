<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hit Counter</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="container">
	<div class="lihat">
		<h1>Terima Kasih Atas Partisipasi Anda Mengisi Guestbook</h1>
	<?php 
	
	$nama       =$_POST['nama'];
	$alamat     =$_POST['alamat'];
	$email      =$_POST['email'];
	$komentar   =$_POST['komentar'];

	$fp = fopen("guestbook.txt","a+");
	fputs($fp,"$nama | $alamat | $email | $komentar\n");
	fclose($fp);

 ?>

	<div class="lihat3">
		<a href=index.php> Isi Guestbook </a>
	</div>
	<div class="lihat3">
		<a href=lihat.php> Lihat Isi Guestbook </a>
	</div>

	 </div>
	 </div>
</body>
</html>
