<?php
    
    session_start();

    if ($_POST["hasil"] != $_SESSION["hasil"]) {
        //  Salah
        $_SESSION["score"] = $_SESSION["score"] - 2 ;
        $_SESSION["lives"] = $_SESSION["lives"] - 1 ;
        header('Location: salah.php');
    } else {
        //  Benar
        $_SESSION["score"] = $_SESSION["score"] + 10 ;
        header('Location: benar.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>