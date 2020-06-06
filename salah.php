<?php    
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    Hello <?php echo $_SESSION["nama"]; ?>, sayang jawaban Anda salah… tetap semangat ya !!!
    Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?>

    <a href="gameplay.php">[Soal selanjutnya]</a>
</body>
</html>
