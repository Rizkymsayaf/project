<?php
session_start();
if (!$_SESSION['login']) {
    echo "<script type='text/javascript'>
        alert('Maaf anda harus login terlebih dahulu!');
            window.location = '/login.php'
        </script>";
} else {
    include 'database.php';
    $user = new Database();
    $user = mysqli_query(
        $user->koneksi,
        "select * from users where password='$_SESSION[login]'"
    );
    // var_dump($_SESSION['login']);
    $user = mysqli_fetch_array($user);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center><h1>sistem informasi sederhana</h1></center>
    <center><h2>peminjaman buku</h2></center>

    <br>
    <center><button type="button"><a href="anggota/index.php">DATA ANGGOTA</a></button></center>
    <center><button type="button"><a href="buku/index.php">DATA BUKU</a></button></center>
    <center><button type="button"><a href="meminjam/index.php">MEMINJAM</a></button></center>
    <center><button type="button"><a href="logout.php">LOGOUT</a></button></center>
</body>
</html>
<?php }?>


