<!DOCTYPE html>
<html>
<head>
    <title>PMB Online Universitas Dwiki Ahmad</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>

<h1>PMB Online Universitas Dwiki Ahmad</h1>
<hr>

<div class="menu">
    <ul id="navigasi">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?m=about">About</a></li>
        <li><a href="index.php?m=logout">Keluar</a></li>
    </ul>
</div>

<div class="content">
    <?php
    include "function.php"; // Memasukkan file function.php untuk mendapatkan definisi fungsi content()

    session_start();

    // Cek apakah pengguna telah login
    if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
        header("Location: login.php");
        exit();
    }

    // Handle logout
    if (isset($_GET['m']) && $_GET['m'] === 'logout') {
        header("Location: logout.php");
        exit();
    }

    // Menangani parameter m yang kosong atau tidak valid
    $m = isset($_GET['m']) ? $_GET['m'] : '';

    // Menampilkan content yang diinginkan
    $file = content($m);
    include "page/" . $file;
    ?>
</div>

<footer class="footer">
    &copy; Copyright 2024
</footer>

</body>
</html>
