<?php
	session_start();
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Math Game</title>
</head>

<body>
<h1>Math Game</h1>

<?php
	if (isset($_SESSION["email"])) {
?>

Hallo <?php echo $_SESSION["nama"]; ?> , selamat datang kembali di permainan ini!!! <br><br>
<a href="gameplay.php">[Start Game]</a> <br> <br>
Bukan Anda? <a href="reset.php">(klik di sini)</a> 

<?php

	} else {

?>

<form action="gameplay.php" method="post">
		Nama
		<input type="text" name="nama" id="nama">
		<br>
		
		Email
		<input type="email" name="email" id="email">
		<br> <br>

		<input type="submit" value="Mulai Main">
	</form>

<?php

	}
?>


</body>
</html>