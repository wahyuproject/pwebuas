<?php
    require 'function.php';


    //cek login tersambung atau tidak
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //mencocokan database
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where username='$username' and password='$password'");
        //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);
    if ($hitung>0) {
        $_SESSION['log'] = 'True';
        header('location:index.php');
    }else{
        header('location:index.php');
    };
};

    if (!isset($_SESSION['log'])) {
        
    } else{
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="loginstyle.css">
	<title>Form Login</title>
</head>
<body>
	<form method="post">
		<div class="grup">
			<h2>Form Login</h2>

		<div class="login">
			<input name="username" id="inputUsername" type="username" required="">
			<span>Username</span>
		</div>

		<div class="login">
			<input name="password" id="inputPassword" type="password" required="">
			<span>Password</span>
		</div>

		<div class="login">
			<input name="login" type="Submit" value="login">
		</div>

		</div>
	</form>

</body>
</html>
