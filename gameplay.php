<?php

	session_start();

	if (isset($_SESSION["email"])) {
		
	} else {
		$_SESSION["nama"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}

	if ($_SESSION["lives"] == 0) {
		//	Nyawa Habis
		header('Location: gameover.php');
	}

	$bilSatu = rand(0,20);
	$bilDua = rand(0,20);
	$hasil = $bilSatu + $bilDua;
	$_SESSION["hasil"] = $hasil;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="jawaban.php" method="post">	
		Hello <?php echo $_SESSION["nama"]; ?>, tetap semangat ya… you can do the best!! <br>
		Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?> <br> <br>
		Berapakah <?php echo $bilSatu; ?> + <?php echo $bilDua; ?> =  <br>
		<input type="number" name="hasil">
		<input type="submit" value="submit">
	</form>

</body>
</html>