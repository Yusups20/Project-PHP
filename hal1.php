<?php
    session_start();
    if ($_SESSION['akseslogin']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
    <nav>
        <a href="halaman1.php">Halaman 1</a>|
        <a href="halaman2.php">Halaman 2</a>|
        <a href="halaman3.php">Halaman 3</a>|
        <a href="logout.php">Logout   </a>|
    </nav>
    <br>
    Silahkan Pilih Halaman<?php echo $_SESSION['akseslogin']; ?>
</body>
</html>
<?php
    }else {
        echo "<script> alert('Silahkan Login Terlebih Dahulu');"
        ."window.location.href='login.php'</script>";
    }
?>