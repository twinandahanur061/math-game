<?php
//menjalankan session
session_start();
//output info player
echo "Hello " . $_SESSION['nama_user'] . " tetap semangat ya... you can do the best!!<br>";
echo "Lives: <". $_SESSION['live'] . "> | Score: <" . $_SESSION['skor'] . ">";
//variabel x,y random angka 0 - 20
$x = rand(0,20);
$y = rand(0,20);
//kondisi pemrosesan form jawaban
if(isset($_POST['submit']))
{
    //membuat variabel dari pengambilan post form
    $jawab = $_POST['jawaban'];
    $hasil = $_SESSION['hasil'];
    $x_soal = $_SESSION['xsoal'];
    $y_soal = $_SESSION['ysoal'];
    if( $jawab == $hasil){
        //session jawab benar skor di tambah 10
        $_SESSION['skor'] += 10;
        echo "<p>";
        echo "Hello " . $_SESSION['nama_user'] . " Selamat jawaban Anda benar...<br> $x_soal + $y_soal = $hasil <br>";
        echo "Lives: <". $_SESSION['live'] . "> | Score: <" . $_SESSION['skor'] . ">";
        echo "</p>";
        echo "<p>";
        //link untuk melanjutkan soal
        echo "<a href='soal.php'> [Soal selanjutnya]</a>";
        echo "</p>";
        die();
    } else{
        //session jawaban salah skor -2, live -1
        $_SESSION['skor'] -= 2;
        $_SESSION['live'] -= 1;
        echo "<p>";
        echo "Hello " . $_SESSION['nama_user'] . " sayang jawaban Anda salah... tetap semangat ya !!! <br> $x_soal + $y_soal = $hasil <br>";
        echo "Lives: <". $_SESSION['live'] . "> | Score: <" . $_SESSION['skor'] . ">";
        echo "</p>";
        echo "<p>";
        echo "<a href='soal.php'> [Soal selanjutnya]</a>";
        echo "</p>";
        if($_SESSION['live'] <= 0){
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=gameover.php">';
            //header('Location:gameover.php');
            exit();
        }
    }
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL</title>
</head>
<body>
    <!-- FORM inputan jawaban -->
    <form action="soal.php" method="post">
    <!-- Output Soal -->
    <p> Berapakah 
    <?php 
    //membuat variabel xsoal,ysoal dari x,y sebelumnya menjadi session sehingga data tersimpan dan bisa di proses
    $_SESSION['xsoal'] = $x;
    $_SESSION['ysoal'] = $y; 
    $_SESSION['hasil'] = $x + $y;
    echo "$x + $y "
    ?> = <input type="number" name="jawaban">
    <input type="submit" name="submit">
    </p>
    </form>
</body>
</html>