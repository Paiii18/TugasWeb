<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style/about.css">
</head>
<body>
<h2>About</h2>
<div class="content">
    <?php
    // Menerima data dari form home.php
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $jenjang = $_POST['jenjang'];
    $prodi = $_POST['prodi'];
    ?>
    <!-- Menampilkan data yang diterima dari form home.php -->
    <div>
        <label for="nama">Nama Lengkap: </label>
        <span><?php echo $nama; ?></span>
    </div>
    <div>
        <label for="no_hp">No HP: </label>
        <span><?php echo $no_hp; ?></span>
    </div>
    <div>
        <label for="email">Email: </label>
        <span><?php echo $email; ?></span>
    </div>
    <div>
        <label for="alamat">Alamat: </label>
        <span><?php echo $alamat; ?></span>
    </div>
    <div>
        <label for="jenjang">Jenjang: </label>
        <span><?php echo $jenjang; ?></span>
    </div>
    <div>
        <label for="prodi">Prodi: </label>
        <span><?php echo $prodi; ?></span>
    </div>
</div>
</body>
</html>
