<?php
//Menjalankan Session
session_start();
//Output Pemain yang sudah terdaftar
echo "Hallo " . $_SESSION['nama_user'] . ", selamat datang kembali di permainan ini!!!<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulang</title>
</head>
<body>
    <!-- Form Memulai Game baru -->
    <form action='soal.php' method='post'>
        <input type='submit' name='soal' value='Start Game'>
    </form>
    <!-- Link untuk kembali ke halaman index -->
    <p>Bukan Anda? <a href="index.php">(klik di sini)</a></p>
</body>
</html>