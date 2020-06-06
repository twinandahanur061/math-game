<?php
session_start();
$link = mysqli_connect('localhost', 'root', '', 'k3518061');
if (!$link){
    die('ada error ' . mysqli_connect_error());
}
if ( isset( $_POST['submit']))
{
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $sql_nama = "SELECT nama, email FROM player WHERE nama='$name'";
    $result = mysqli_query($link, $sql_nama);
    $nama_caridb = array();
    $email_caridb = array();
    if (mysqli_num_rows($result) > 0) {
        while($data = mysqli_fetch_assoc($result)) {
            $data_nama = $data['nama'];
            $data_email = $data['email'];
            array_push($nama_caridb, $data_nama);
            array_push($email_caridb, $data_email);
        }
    }

    $nama_str = implode("", $nama_caridb);
    $email_str = implode("", $email_caridb);

    if($name == $nama_str && $email = $email_str){
        $_SESSION['nama_user'] = $_POST['nama'];
        $_SESSION['live'] = 5;
        $_SESSION['skor'] = 0;
        header('Location:playold.php');
        die();
    } else{
        $query_daftar = "INSERT INTO player (nama, email, skor) VALUES ('$name', '$email', 0)";
        $hasil_daftar = mysqli_query($link, $query_daftar);
        $_SESSION['nama_user'] = $_POST['nama'];
        $_SESSION['live'] = 5;
        $_SESSION['skor'] = 0;
        header('Location:soal.php');
        die();
    }
}
//menutup koneksi
mysqli_close($link);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height initial-scale=1.0, shrink-to-fit=yes">
    <title>Math Game</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=49fdaeac2f9991ca5a55fed0b6468492">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css?h=587ac2057624923cd5be3eaf8b1158cd">
    <link rel="stylesheet" href="assets/css/styles.css?h=d41d8cd98f00b204e9800998ecf8427e">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
</head>

<body>
    <div class="login-clean">
            <form action="index.php" method="post">
            <h2 class="sr-only">Masuk</h2>
            <h1 class="text-center">Math Game</h1>
            <div class="form-group"><input class="form-control" type="name" name="name" placeholder="Name" required></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"  name="submit" >Masuk</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js?h=89312d34339dcd686309fe284b3f226f"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=7c038681746a729e2fff9520a575e78c"></script>
</body>

</html>


